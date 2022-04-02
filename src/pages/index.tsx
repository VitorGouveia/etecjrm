import { memo } from "react";
import type { NextPage } from "next";

import { useContextSelector } from "use-context-selector";
import { ThemeContext } from "@context/theme";

import { dark } from "@styles/themes/dark";
import { light } from "@styles/themes/light";

const Home: NextPage = () => {
  const theme = useContextSelector(ThemeContext, (context) => context.theme);

  const loadTheme = useContextSelector(
    ThemeContext,
    (context) => context.loadTheme
  );

  return (
    <div>
      <p>hello world</p>

      {theme.title === "light" ? (
        <button onClick={() => loadTheme(dark)}>change to dark</button>
      ) : (
        <button onClick={() => loadTheme(light)}>change to light</button>
      )}
    </div>
  );
};

export default memo(Home);
