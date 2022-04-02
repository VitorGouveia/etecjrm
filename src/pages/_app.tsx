import type { AppProps } from "next/app"

import "@styles/global.css"

import Layout from "@components/layout"

import { ThemeProvider } from "@context/theme"
import { defaultTheme } from "@styles/themes/default"

const App: React.FC<AppProps> = ({ Component, pageProps }) => {
  return (
    <ThemeProvider defaultTheme={defaultTheme}>
      <Layout>
        <Component {...pageProps} />
      </Layout>
    </ThemeProvider>
  )
}

export default App