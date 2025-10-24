# 🌐 Repositorio de Ejercicios y Proyectos Colaborativos — Full Stack (PHP, HTML, CSS, JavaScript)- ISTAE(https://www.istae.edu.ec/)

Bienvenido/a al **Repositorio de Ejercicios y Proyectos Colaborativos** del **Instituto Superior Tecnológico Alberto Enríquez**.  
Este espacio ha sido creado para que los estudiantes trabajen en equipo, desarrollando **habilidades técnicas y colaborativas** bajo el modelo **de desarrollo colaborativo con Git y GitHub**.

---

## 🎯 Objetivo General

Fomentar el aprendizaje práctico del desarrollo web **Full Stack** mediante la creación conjunta de proyectos y ejercicios, utilizando **GitHub** como entorno de colaboración y control de versiones.

---

## 🎯 Objetivos Específicos

1. Promover el trabajo en equipo aplicando metodologías colaborativas de desarrollo.  
2. Potenciar el uso de herramientas de control de versiones (Git) y repositorios remotos (GitHub).  
3. Desarrollar competencias técnicas en los lenguajes **PHP, HTML, CSS y JavaScript**.  
4. Implementar buenas prácticas de documentación, codificación y versionado.  
5. Generar proyectos que integren los componentes **Frontend y Backend** del desarrollo web.

---

## 💻 Stack Tecnológico

| Área | Tecnologías |
|------|--------------|
| **Frontend** | HTML5, CSS3, JavaScript (ES6+), Bootstrap |
| **Backend** | PHP 8+ |
| **Control de versiones** | Git & GitHub |
| **Colaboración** | GitHub Projects, Issues, Pull Requests |

---

## 🤝 Normas de Colaboración

- Cada estudiante deberá **crear su propia rama** (`feature-nombre` o `dev-nombre`).
- Los cambios se integran mediante **Pull Requests (PR)**.
- Mantener el código limpio, documentado y funcional.
- Se revisarán los **commits y contribuciones** como parte del proceso de evaluación.
- No modificar archivos ajenos sin autorización o revisión previa.

---
📦 repositorio-colaborativo-fullstack/
├── 📂 ejercicios/
│ ├── html-css/
│ ├── javascript/
│ └── php/
├── 📂 proyectos/
│ ├── proyecto1/
│ ├── proyecto2/
│ └── proyecto_final/
├── 📄 README.md
└── 📄 .gitignore

## 📁 Estructura del Repositorio



---

## 🧭 Tutorial Básico de Git y GitHub

### 🔹 Configuración Inicial


# Configurar tu nombre de usuario y correo
git config --global user.name "TuNombre"
git config --global user.email "tuemail@ejemplo.com"

# Verificar la configuración
git config --list

Clonar el Repositorio
git clone https://github.com/o698polk/3a_programacion_web.git
cd repositorio-colaborativo-fullstack

Crear y Cambiar de Rama
git checkout -b feature-tu_nombre

Agregar, Confirmar y Subir Cambios
git add .
git commit -m "Descripción breve del cambio realizado"
git push origin feature-tu_nombre


Unir Cambios (Merge)

Desde GitHub, crea un Pull Request (PR) desde tu rama hacia main para revisión y fusión.

Tutorial Avanzado de Git y GitHub
🔸 Actualizar tu Rama con los Últimos Cambios
git checkout main
git pull origin main
git checkout feature-tu_nombre
git merge main

🔸 Resolver Conflictos

Si Git detecta conflictos:

Edita los archivos marcados con <<<<<<<, =======, >>>>>>>.

Elimina los indicadores de conflicto.

Guarda los cambios y realiza un nuevo commit:

git add .
git commit -m "Conflictos resueltos"
git push origin feature-tu_nombre

🔸 Revertir un Cambio
git log        # Ver historial de commits
git revert <id_commit>   # Revertir un commit específico

🔸 Eliminar Ramas
# Local
git branch -d feature-tu_nombre

# Remoto
git push origin --delete feature-tu_nombre

🔸 Enviar Cambios Forzadamente (con precaución)
git push origin feature-tu_nombre --force

🚀 Recomendaciones Finales

Haz commits pequeños y frecuentes.

Escribe mensajes de commit claros y descriptivos.

Antes de subir cambios, siempre haz:

git pull origin main


Usa las Issues para reportar errores o proponer mejoras.

Participa activamente en la revisión de código (code review).

📚 Recursos de Aprendizaje

Documentación oficial de Git

Guía oficial de GitHub

Aprende Git en 15 minutos

PHP.net

MDN Web Docs (HTML, CSS, JS)

🏁 Autor y Coordinación

Instructor: ING.POLK VERNAZA
Instituto Superior Tecnológico Alberto Enríquez
📧 Contacto: [pvernaza@istae.edu.ec
📅 Año: 2025


********************************LINK DE PAGINAS PARA CV Y OFERTAS LABORALES *********************************************

<a href="https://encuentraempleo.trabajo.gob.ec/" target"_blank">SOCIO EMPLEO<a>
<a href="https://www.linkedin.com/" target"_blank">LIKEDIN<a>
<a href="https://capacitateparaelempleo.org/" target"_blank">CAPACITATE PARA EL EMPLEO<a>