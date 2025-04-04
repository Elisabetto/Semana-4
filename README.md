# Tema WordPress: Tema Semana 3

##Archivos que contiene el tema:
- style.css: EL archivo de estilo con los metadatos del tema.
- index.php: Archivo principal donde se muestra el contenido de las publicaciones.
- header.php: Encabezado que incluye el menú de navegación y la apertura de las etiquetas HTML.
- footer.php: Pie de página con la información de contacto.
- functions.php: Archivo de funciones para registrar el tema, menú, etc.
- front-page.php: Página estática con contenido personalizado.
- home.php: Listado de artículos con título, extracto y enalce a la entrada.
- page-contacto.php: Formulario de contacto.
- screenshot.png: Imagen de muestra del tema.

##Pasos para crear una plantilla desde cero.
1. Crear la carpeta para el tema: Crear una carpeta en wp-content/themes/ con el nombre del tema (Tema Semana 3).
2. Crear el archivo style.css: Crear el archivo con los metadatos básicos (Theme name, theme URI, author, etc.).
3. Crear un index.php: Es el archivo principal del tema, cuando WordPress no encunetra qu epágina mostrar se utilizará este.
4. Crear el arrchivo header.php: Introducir los metadatos, el nombre del sitio y el menú de navegación.
5. Crear un footer.php: Ingresar los datos de contacto o lo que queramos mostrar en el pie de página.
6. Functions.php: Registrar el menú de navegación, el sidebar y activar otras funcionalidades.
7. Menú de navegación: Registrar el menú de navegación en functions.php.
8. Crear las páginas específicas: front-page, home.php, page-contacto.
9. Subir todos los archivos que has creado a nuestra carpeta de temas.
10. Activar la carpeta de temas.


##Archivos principales
###Functions
- Definir la función donde se configuran varias características y funcionalidades del tema.
- Activar la funcionalidad de publicaciones (thumbnails).
- Activar la funcionalidad de diferentes formatos de publicación.
- Registrar un menú de navegación "Menú principal".
- Registrar el área de widgets "Sidebar principal".
- Hacer funcional el archivo style.css para que funcione con el tema.

###Header y Footer
- Mostrar el título del sitio web.
- Añadir un menú de navegación en la ubicación principal.

- Añadir la información de contacto

###Font-page (Página de Inicio)
- Se añade el archivo header.
- Se modifica el tamaño de la imagen de entrada añadiendo el 'medium_large' en 'the_post_thumbnail ()'.
- Se añade contenido textual estático dentro de 'div class="contenido-box"'.
- Se incluye el pie de página utilizando el 'get footer()'.

###Home-page (Blog)
- Se agrupa todo el contenido en una sección.
- Se utiliza el 'have_posts()' y el 'the_post()' para cargar las publicaciones disponibles.
- Se obtiene el link de las entradas (the_permalink()), se muestra el título (the_title) y un resumen de la entrada (the_excerpt).
- Se añade el sidebar para mostrar widgets en la página.

###Page-contacto
- Formulario básico de contacto compuesto por 'nombre', 'correo' y 'mensaje'.
