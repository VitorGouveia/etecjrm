import Link from "next/link";
import { memo, useCallback, useEffect, useRef, useState } from "react";
import { CSSTransition } from "react-transition-group";

import styles from "../../styles.module.css";

type DropdownItemProps = {
  children: React.ReactNode;
  goToMenu?: string;
  leftIcon?: React.ReactNode;
  rightIcon?: React.ReactNode;

  href?: string;
};

type DropdownProps = {
  hidden: boolean;
};

const courses = [
  {
    name: "produção de áudio e vídeo",
    href: "/audio-video",
  },
  {
    name: "multímidia",
    href: "/multimidia",
  },
  {
    name: "comunicação visual",
    href: "/comunicacao-visual",
  },
  {
    name: "informática para internet",
    href: "/info",
  },
  {
    name: "jogos digitais",
    href: "/jogos-digitais",
  },
  {
    name: "marketing",
    href: "/marketing",
  },
];

const CoursesDropdown: React.FC<DropdownProps> = ({ hidden }) => {
  const [activeMenu, setActiveMenu] = useState("main");
  const [menuHeight, setMenuHeight] = useState<number | null>(null);
  const dropdownRef = useRef<HTMLDivElement>(null);

  useEffect(() => {
    const inner = dropdownRef.current?.firstChild as HTMLElement;

    setMenuHeight(inner?.offsetHeight);
  }, []);

  const calcHeight = useCallback((element: HTMLElement) => {
    const height = element.offsetHeight;
    setMenuHeight(height);
  }, []);

  // eslint-disable-next-line react/display-name
  const DropdownItem: React.FC<DropdownItemProps> = memo(
    ({ children, leftIcon, rightIcon, goToMenu, href }) => {
      return (
        <Link href={href || "#"}>
          <a
            className={styles.menuItem}
            onClick={() => goToMenu && setActiveMenu(goToMenu)}
          >
            {leftIcon && <span className={styles.iconButton}>{leftIcon}</span>}

            {children}

            {rightIcon && <span className={styles.iconRight}>{rightIcon}</span>}
          </a>
        </Link>
      );
    }
  );

  const transitionTimeout = 500;
  const maxDropdownHeight = 300;

  return (
    <div
      className={styles.dropdown}
      ref={dropdownRef}
      data-hidden={`${!hidden}`}
      style={
        menuHeight
          ? {
              height: `${menuHeight + 20}px`,
              overflowY: menuHeight > maxDropdownHeight ? "auto" : "hidden",
            }
          : {}
      }
    >
      <CSSTransition
        in={activeMenu === "main"}
        unmountOnExit
        timeout={transitionTimeout}
        classNames="menu-primary"
        onEnter={calcHeight}
      >
        <div className={styles.menu}>
          <DropdownItem>{"brda"}</DropdownItem>
          {/* {courses.map(({ name, href }) => (
            <DropdownItem key={href}>{name.toUpperCase()}</DropdownItem>
          ))} */}
        </div>
      </CSSTransition>
    </div>
  );
};

export default memo(CoursesDropdown);
