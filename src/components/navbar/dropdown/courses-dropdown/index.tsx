import Link from "next/link";
import { memo } from "react";

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

  return (
    <Dropdown dropdownRef={dropdownRef} hidden={hidden} menuHeight={menuHeight}>
      <Transition
        menu="main"
        variant="primary"
        activeMenu={activeMenu}
        calcHeight={calcHeight}
      >
        {courses.map(({ name, href }) => (
          <DropdownItem key={href}>{name.toUpperCase()}</DropdownItem>
        ))}
      </Transition>
    </Dropdown>
  );
};

export default memo(CoursesDropdown);
