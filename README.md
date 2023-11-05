# dw_entrega_V3
Creación de Base de Datos para RolePlayingGame

Este proyecto implica la creación de una base de datos llamada "rolegame" que contendrá una tabla llamada "creature" con los siguientes campos:
Estructura de la tabla "creature"

La tabla "creature" tendrá la siguiente estructura de campos:

    IdCreature (campo autoincremental): Un número único que identifica a cada criatura en la base de datos.
    Nombre (name): El nombre de la criatura.
    Descripción (description): Una descripción detallada de la criatura.
    Avatar (avatar): La URL del avatar de la criatura.
    El poder de ataque (attackPower) 
    El nivel de vida (lifeLevel)
    El arma (weapon)

Carga del Proyecto con la Plantilla Inicial

Para comenzar, abre el proyecto PHP llamado "RolePlayingGame". Este proyecto ya viene estructurado y listo para mostrar la información sobre las criaturas que forman parte del juego. La plantilla Bootstrap se utiliza para listar todas las criaturas en la web.
Página de Inicio - Listado de Criaturas

La página de inicio muestra un listado de todas las criaturas del juego. Para cada criatura se muestran los siguientes detalles:

    Nombre: Se muestra en una etiqueta <h2>.
    Avatar: Se muestra en una etiqueta <img>, utilizando la URL del avatar de la criatura.
    Descripción: Se muestra en una etiqueta <p>.
    Botones de Acción:
        "Detalle": Permite ver información detallada de la criatura.
        "Editar": Permite modificar los campos de la criatura.
        "Eliminar": Permite borrar la criatura de la base de datos.

Creación de una Nueva Criatura

En la barra de menú se incluye un enlace que permite a los usuarios crear una nueva criatura. Al hacer clic en este enlace, los usuarios serán redirigidos a una página que les permite ingresar los siguientes detalles de la criatura:

    Nombre
    URL del Avatar
    Descripción
    El poder de ataque
    El nivel de vida
    El arma


Una vez que se complete la inserción, el usuario será redirigido nuevamente a la página de listado inicial.
Modificación de una Criatura Existente

Cuando un usuario hace clic en el botón "Editar" de una criatura existente, se carga un formulario de edición que contiene los datos actuales de la criatura. El usuario puede modificar los campos según sea necesario.

Una vez que se realicen las modificaciones, el usuario será redirigido nuevamente a la página de listado inicial.
Eliminación de una Criatura

El botón "Eliminar" correspondiente a cada criatura permite al usuario borrar la criatura de la base de datos de forma permanente.
Detalle de una Criatura

El botón "Más información" permite a los usuarios obtener detalles completos de los campos de una criatura en una pantalla dedicada.

Este proyecto proporciona una interfaz interactiva para administrar criaturas en una base de datos, incluyendo su creación, edición, eliminación y visualización detallada.
