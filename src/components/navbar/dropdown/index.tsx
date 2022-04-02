import {
  memo,
  RefObject,
  useCallback,
  useEffect,
  useRef,
  useState,
} from "react";
import { CSSTransition } from "react-transition-group";

import { useOnClickOutside } from "@hooks/useOnClickOutside";

import styles from "../styles.module.css";

export const transitionTimeout = 500;
export const maxDropdownHeight = 300;

type DropdownItemProps = {
  children: React.ReactNode;
  goToMenu?: string;
  leftIcon?: React.ReactNode;
  rightIcon?: React.ReactNode;
};

type useDropdownProps = {
  setOpen: (open: boolean) => void;
};

export const useDropdown = ({ setOpen }: useDropdownProps) => {
  const [activeMenu, setActiveMenu] = useState("main");
  const [menuHeight, setMenuHeight] = useState<number | null>(null);
  const dropdownRef = useRef<HTMLDivElement>(null);

  useOnClickOutside(dropdownRef, (event) => {
    // clicked element
    const clickedElement = event.target as HTMLElement;
    // search for this dropdown near the clicked element
    const dropdownTarget = clickedElement.nextSibling;
    if (dropdownTarget === dropdownRef.current) {
      console.log("the clicked element is the link used to open the dropdown");
      return;
    }

    setOpen(false);
    console.log("probably a link or something else");
  });

  useEffect(() => {
    const inner = dropdownRef.current?.firstChild as HTMLElement;
    setMenuHeight(inner?.offsetHeight);
  }, []);

  const calcHeight = useCallback((element: HTMLElement) => {
    const height = element.offsetHeight;
    setMenuHeight(height);
  }, []);

  return {
    activeMenu,
    setActiveMenu,
    menuHeight,
    calcHeight,
    dropdownRef,
  };
};

type TransitionProps = {
  menu: string;
  activeMenu: string;
  calcHeight: (element: HTMLElement) => void;

  variant: "primary" | "secondary";
};

export const Transition: React.FC<TransitionProps> = ({
  children,
  menu,
  activeMenu,
  calcHeight,
  variant,
}) => {
  return (
    <CSSTransition
      in={activeMenu === menu}
      unmountOnExit
      timeout={transitionTimeout}
      classNames={`menu-${variant}`}
      onEnter={calcHeight}
    >
      <div className={styles.menu}>{children}</div>
    </CSSTransition>
  );
};

export type DropdownProps = {
  hidden: boolean;
  menuHeight: number | null;
  dropdownRef: RefObject<HTMLDivElement>;
  children: React.ReactNode;
};

export type GenericDropdownProps = {
  hidden: boolean;
  setOpen(open: boolean): void;
};

const Dropdown: React.FC<DropdownProps> = ({
  hidden,
  children,
  dropdownRef,
  menuHeight,
}) => {
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
      {children}
    </div>
  );
};

export default memo(Dropdown);
