import { memo, useCallback, useEffect, useRef, useState } from "react";
import Link from "next/link";
import { CSSTransition } from "react-transition-group";

import Dropdown, {
  GenericDropdownProps,
  Transition,
  useDropdown,
} from "../index";

import styles from "../../styles.module.css";

type DropdownItemProps = {
  children: React.ReactNode;
  goToMenu?: string;
  leftIcon?: React.ReactNode;
  rightIcon?: React.ReactNode;

  href?: string;
};

const courses = [
  {
    name: "aproveitamento de estudos - 2021/02",
    href: "/aproveitamento",
  },
  {
    name: "acolhimento",
    href: "/acolhimento",
  },
  {
    name: "horário das aulas",
    href: "/horiario",
  },
  {
    name: "e-mail @etec",
    href: "/email",
  },
  {
    name: "ata de conselho - 2021",
    href: "/ata",
  },
];

const CoursesDropdown: React.FC<GenericDropdownProps> = ({
  hidden,
  setOpen,
}) => {
  const { setActiveMenu, dropdownRef, menuHeight, activeMenu, calcHeight } =
    useDropdown({
      setOpen,
    });

  // eslint-disable-next-line react/display-name
  const DropdownItem: React.FC<DropdownItemProps> = memo(
    ({ children, leftIcon, rightIcon, goToMenu, href }) => {
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

  // eslint-disable-next-line react/display-name
  const DropdownItemLink: React.FC<DropdownItemProps & { href: string }> = memo(
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

  return (
    <Dropdown dropdownRef={dropdownRef} hidden={hidden} menuHeight={menuHeight}>
      <Transition
        menu="main"
        variant="primary"
        activeMenu={activeMenu}
        calcHeight={calcHeight}
      >
        {courses.map(({ name, href }) => (
          <DropdownItemLink href={href} key={href}>
            {name.toUpperCase()}
          </DropdownItemLink>
        ))}
        <DropdownItem goToMenu="slim">go to slim</DropdownItem>
      </Transition>

      <Transition
        menu="slim"
        variant="secondary"
        activeMenu={activeMenu}
        calcHeight={calcHeight}
      >
        <DropdownItem goToMenu="main">back</DropdownItem>
      </Transition>
    </Dropdown>
  );
};

export default memo(CoursesDropdown);
