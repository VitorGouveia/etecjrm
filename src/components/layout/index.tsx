import { useEffect, useState } from "react";

import styles from "./styles.module.css";

import Navbar from "@components/navbar";
import NavbarItem, { NavItemLink } from "@components/navbar/item";

import Dropdown from "@components/navbar/dropdown";
import CoursesDropdown from "@components/navbar/dropdown/courses-dropdown";
import StudentDropdown from "@components/navbar/dropdown/student-dropdown";

const Layout: React.FC = ({ children }) => {
  const [loading, setLoading] = useState(false);

  useEffect(() => {
    setTimeout(() => {
      setLoading(false);
    }, 1000);
  }, []);

  return (
    <main className={styles.container}>
      <Navbar>
        <NavItemLink icon={"Home"} href="/" />
        <NavItemLink icon={"Etec JRM"} href="/etecjrm" />

        <NavbarItem
          icon={"cursos técnicos"}
          content={({ ...props }) => <CoursesDropdown {...props} />}
        />

        <NavbarItem
          icon={"espaço do aluno >"}
          content={({ ...props }) => <StudentDropdown {...props} />}
        />

        <NavItemLink icon={"Agenda Etecjrm"} href="/agenda" />
        <NavItemLink icon={"Blog"} href="/blog" />
        <NavItemLink icon={"Fale conosco"} href="/faq" />
        <NavItemLink icon={"Localização"} href="/localizacao" />
      </Navbar>

      <section className={styles.content}>{children}</section>
    </main>
  );
};

export default Layout;
