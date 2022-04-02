import { memo, useRef, useState } from "react";

import styles from "./styles.module.css";

type NavbarProps = {
  children: React.ReactNode;
};

const Navbar: React.FC<NavbarProps> = ({ children }) => {
  // const [activeMenu, setActiveMenu] = useState("main");
  // const [menuHeight, setMenuHeight] = useState(null);
  // const dropdownRef = useRef(null);

  // useEffect(() => {
  //   setMenuHeight(dropdownRef.current?.firstChild.offsetHeight);
  // }, []);

  return (
    <nav className={styles.navbar}>
      <ul className={styles.nav}>{children}</ul>
    </nav>
  );
};

export default memo(Navbar);
