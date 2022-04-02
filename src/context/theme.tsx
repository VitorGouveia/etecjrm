/* eslint-disable react-hooks/exhaustive-deps */
import { memo, useEffect, useState } from "react"
import { createContext } from "use-context-selector"

import { defaultTheme } from "@styles/themes/default"

export type Theme = typeof defaultTheme

type ThemeContextProps = {
  theme: Theme

  loadTheme(theme: Theme): void
}

export const ThemeContext = createContext({} as ThemeContextProps)

type ThemeProviderProps = {
  children: React.ReactNode

  defaultTheme: Theme
}

// eslint-disable-next-line react/display-name
export const ThemeProvider: React.FC<ThemeProviderProps> = memo(({ children, defaultTheme }) => {
  const [theme, setTheme] = useState<Theme>(defaultTheme)
  const themeKey = "@etecjrm:theme"

  const loadTheme = (theme: Theme) => {
    setTheme(theme)
    localStorage.setItem(themeKey, JSON.stringify(theme))
    // add to root styles

    const html = document.querySelector("html")

    if(!html) {
      return
    }

    html.setAttribute("data-theme", theme.title)

    Object.entries(theme).forEach(([key, value]) => {
      html.style.setProperty(`--${key}`, value)
    })
  }
  
  useEffect(() => {
    const localTheme = localStorage.getItem(themeKey)

    if(!localTheme) {
      loadTheme(theme)

      return
    }

    loadTheme(JSON.parse(localTheme))
    return
  }, [])

  return (
    <ThemeContext.Provider value={{theme, loadTheme}}>
      {children}
    </ThemeContext.Provider>
  )
})