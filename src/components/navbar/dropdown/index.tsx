import { memo, useCallback, useEffect, useRef, useState } from "react";
import { CSSTransition } from "react-transition-group";

import styles from "../styles.module.css";

type DropdownItemProps = {
  children: React.ReactNode;
  goToMenu?: string;
  leftIcon?: React.ReactNode;
  rightIcon?: React.ReactNode;
};

type DropdownProps = {
  hidden: boolean;
};

const Dropdown: React.FC<DropdownProps> = ({ hidden }) => {
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
    ({ children, leftIcon, rightIcon, goToMenu }) => {
      return (
        <a
          href="#"
          className={styles.menuItem}
          onClick={() => goToMenu && setActiveMenu(goToMenu)}
        >
          {leftIcon && <span className={styles.iconButton}>{leftIcon}</span>}

          {children}

          {rightIcon && <span className={styles.iconRight}>{rightIcon}</span>}
        </a>
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
              height: `${menuHeight + 21}px`,
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
          <DropdownItem goToMenu="profile">My profile</DropdownItem>
          <DropdownItem goToMenu="settings">Settings</DropdownItem>
          <DropdownItem goToMenu="theme">Change theme</DropdownItem>
        </div>
      </CSSTransition>

      <CSSTransition
        in={activeMenu === "profile"}
        unmountOnExit
        timeout={transitionTimeout}
        classNames="menu-secondary"
        onEnter={calcHeight}
      >
        <div className={styles.menu}>
          <DropdownItem goToMenu="main">
            <h4>go back</h4>
          </DropdownItem>
          <DropdownItem>
            <button>quit life</button>
          </DropdownItem>
        </div>
      </CSSTransition>

      <CSSTransition
        in={activeMenu === "settings"}
        unmountOnExit
        timeout={transitionTimeout}
        classNames="menu-secondary"
        onEnter={calcHeight}
      >
        <div className={styles.menu}>
          <DropdownItem goToMenu="main">
            <h4>go back</h4>
          </DropdownItem>
        </div>
      </CSSTransition>

      <CSSTransition
        in={activeMenu === "theme"}
        unmountOnExit
        timeout={transitionTimeout}
        classNames="menu-secondary"
        onEnter={calcHeight}
      >
        <div className={styles.menu}>
          <DropdownItem goToMenu="main">
            <h4>go back</h4>
          </DropdownItem>
          <DropdownItem goToMenu="main">
            <h4>go back</h4>
          </DropdownItem>
          <DropdownItem goToMenu="main">
            <h4>go back</h4>
          </DropdownItem>
          <DropdownItem goToMenu="main">
            <h4>go back</h4>
          </DropdownItem>
          <DropdownItem goToMenu="main">
            <h4>go back</h4>
          </DropdownItem>
          <DropdownItem goToMenu="main">
            <h4>go back</h4>
          </DropdownItem>
          <DropdownItem goToMenu="main">
            <h4>go back</h4>
          </DropdownItem>
          <DropdownItem goToMenu="main">
            <h4>go back</h4>
          </DropdownItem>
          <DropdownItem goToMenu="main">
            <h4>go back</h4>
          </DropdownItem>
          <DropdownItem goToMenu="main">
            <h4>go back</h4>
          </DropdownItem>
          <DropdownItem goToMenu="main">
            <h4>go back</h4>
          </DropdownItem>
          <DropdownItem goToMenu="main">
            <h4>go back</h4>
          </DropdownItem>
        </div>
      </CSSTransition>
    </div>
  );
};

export default memo(Dropdown);
