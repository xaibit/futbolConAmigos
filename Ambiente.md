## Ambiente
* Eclipse (Recomendado)
* PHP Development Tools (PDT). Nota: para instalar este plugin, se debe ir a Help > Install New Software > Work With: Available Sites, Ingresar PDT en el campo de busqueda, seleccionar PHP Development Tools y seguir los pasos
* Plugin para Git. Nota: si se tiene la ultima version de Eclipse ya lo posee
* WAMP o XAMPP
* Yii. 
	Pasos a seguir. Descargar ultima version estable (https://github.com/yiisoft/yii/releases/download/1.1.15/yii-1.1.15.022a51.zip)
	Descomprimir el zip en la carpeta de aplicaciones web (www en WAMP, htdocs en XAMPP). Se recomienda renombrar la carpeta generada a Yii
	
## Base de datos
* Ejecutar script inicial de la base de datos futbolconamigosDump20140715.sql
* Crear un usuario con permisos sobre el esquema creado (se podria directamente agregar en el script anterior, no?)

CREATE USER 'adminmundial'@'%' IDENTIFIED BY 'mUnD1aL';GRANT USAGE ON *.* TO 'adminmundial'@'%' IDENTIFIED BY 'mUnD1aL' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;GRANT ALL PRIVILEGES ON `futbolconamigos`.* TO 'adminmundial'@'%';

## Proyecto
* Import en el PHP explorer del Eclipse > Projects from git > Clone URI > En URI completar con https://github.com/xaibit/futbolConAmigos, los campos de autenticacion > master > Elegir el directorio en donde vamos a almacenar el repositorio local de git (Nota: copiar la ruta elegida) > Use the new project wizard > PHP Project > Completar el nombre del proyecto, en Contents indicar la opcion de create project at existing location e indicar la ruta donde se almaceno el repositorio en los pasos previos. Las demas opciones dejar las que tiene por defecto
* Modificar el archivo src/index.php. En la linea donde declara la variable de yii, poner el directorio donde se encuentra la instalacion de Yii realizada previamente. Indicar la ruta completa al archivo que se encuentra dentro de yii\framework\yii.php