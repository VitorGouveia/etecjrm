import { useEffect, useState } from "react";

import styles from "./styles.module.css";

import Navbar from "@components/navbar";
import NavbarItem from "@components/navbar/item";

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
        {/* <NavbarItem icon={"Home"} href="/" />
        <NavbarItem icon={"Etec JRM"} href="/etecjrm" /> */}

        <NavbarItem
          icon={"cursos técnicos"}
          content={({ hidden }) => <Dropdown hidden={hidden} />}
        />

        {/* <NavbarItem
          icon={"espaço do aluno >"}
          content={({ hidden }) => <Dropdown hidden={hidden} />}
        /> */}

        {/* <NavbarItem icon={"Agenda Etecjrm"} href="/agenda" />
        <NavbarItem icon={"Blog"} href="/blog" />
        <NavbarItem icon={"Fale conosco"} href="/faq" />
        <NavbarItem icon={"Localização"} href="/localizacao" /> */}
      </Navbar>

      <section className={styles.content}>{children}</section>
    </main>
  );
};

export default Layout;
