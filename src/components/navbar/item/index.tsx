import { memo, useRef, useState } from "react";
import Link from "next/link";

import styles from "../styles.module.css";

type NavItemProps = {
  icon: React.ReactNode;
  href?: string;
  content: ({
    hidden,
  }: {
    hidden: boolean;
    setOpen: (open: boolean) => void;
  }) => JSX.Element;
};

const NavItem: React.FC<NavItemProps> = ({ icon, href, content: Content }) => {
  const [open, setOpen] = useState(false);

  return (
    <li className={styles.navItem}>
      {/* <Link href={href || "#"}> */}
      <a
        href="#"
        className={styles.iconButton}
        onClick={() => setOpen((open) => !open)}
      >
        {icon}
      </a>
      {/* </Link> */}

      <Content hidden={open} setOpen={setOpen} />
    </li>
  );
};

type NavItemLinkProps = {
  icon: React.ReactNode;
  href: string;
};

// eslint-disable-next-line react/display-name
export const NavItemLink: React.FC<NavItemLinkProps> = memo(
  ({ icon, href }) => {
    return (
      <li className={styles.navItem}>
        <Link href={href || "#"}>
          <a className={styles.iconButton}>{icon}</a>
        </Link>
      </li>
    );
  }
);

export default memo(NavItem);
