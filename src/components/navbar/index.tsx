import { memo } from "react";

import styles from "./styles.module.css";

type NavbarProps = {
  children: React.ReactNode;
};

const Navbar: React.FC<NavbarProps> = ({ children }) => {
  return (
    <nav className={styles.navbar}>
      <ul className={styles.nav}>{children}</ul>
    </nav>
  );
};

export default memo(Navbar);
