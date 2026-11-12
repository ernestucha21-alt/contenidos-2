
# ICENTITY

## Descripción técnica del proyecto

Icentity es un sitio web interactivo desarrollado con HTML, CSS, Bootstrap, PHP y MySQL. La página permite que los usuarios elijan sus sabores de helado favoritos y descubran qué personaje los representa.

## Navegación por el sitio

El sitio está organizado en diferentes páginas conectadas mediante un menú de navegación.

### Página principal

El archivo `index.php` es la página de inicio. Contiene un video de presentación de Icentity, una explicación de cómo funciona la experiencia y dos opciones para participar.

### Elección de sabores

Los usuarios pueden elegir entre dos experiencias:

- **Un gusto:** desde `elegiuno.php`, el usuario selecciona un sabor de helado.
- **Dos gustos:** desde `elegidos.php`, el usuario selecciona dos sabores.

Según las elecciones realizadas, el sitio dirige al usuario a `resultadouno.php` o `resultadodos.php`, donde se muestra el personaje correspondiente.

### Otras secciones

- **Colaboraciones:** en `colaboraciones.php` se presentan las colaboraciones de la marca y un formulario para enviar información.
- **Nosotros:** en `nosotros.php` se encuentra información sobre Icentity.
- **Registro:** en `registro.php` los usuarios pueden crear una cuenta.
- **Inicio de sesión:** en `login.php` pueden ingresar con sus datos.

## Formularios y base de datos

Los formularios del sitio están desarrollados con HTML y se procesan mediante PHP.

La información enviada se almacena en una base de datos MySQL. Para establecer la conexión entre PHP y la base de datos se utiliza el archivo `conexion.php`.

El sistema permite registrar usuarios, verificar sus datos de acceso y guardar la información enviada desde los formularios.

## Zona segura y sesiones

El sitio utiliza sesiones de PHP para identificar a los usuarios que iniciaron sesión.

Cuando un usuario se registra o inicia sesión correctamente, se guardan sus datos en variables `$_SESSION`.

Esto permite mantener la sesión activa mientras navega por las diferentes páginas.

El menú cambia dependiendo del estado de la sesión:

- **Usuario no registrado o sin sesión iniciada:** aparece el ícono para acceder al registro.
- **Usuario con sesión iniciada:** aparece su nombre y la opción SALIR.

Para cerrar la sesión se utiliza el archivo `salir.php`, que elimina los datos de la sesión activa.

Además, las contraseñas se protegen mediante `password_hash()` y se verifican con `password_verify()`.

## Tecnologías utilizadas

- **HTML:** estructura de las páginas.
- **CSS:** estilos y diseño visual.
- **Bootstrap:** adaptación a computadoras, tablets y celulares.
- **PHP:** procesamiento de formularios y manejo de sesiones.
- **MySQL:** almacenamiento de información.
- **XAMPP:** ejecución del proyecto en un servidor local.
- **Git:** control de versiones del proyecto.
- **GitHub:** almacenamiento y publicación del repositorio.
