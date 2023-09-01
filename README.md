Se ha creado el proyecto con el propósito de automatizar la bitácora de escalados existente en el departamento de Telecomunicaciones N1. </br>
El proyecto está programado en PHP, JavaScript, HTML, CSS y SQL; y se han incluido las librerías DataTables, Bootstrap, jQuery, SweetAlert2 y PHPSpreadSheet. </br>
También se ha utilizado el programa Xampp para establecer la conexión entre la página web y la BBDD MySQL en local. </br>
Como requisito para la instalación de la librería PHPSpreadSheet se requiere el programa Composer. Descarga en el siguiente enlace: </br>
https://getcomposer.org/ </br>
Una vez instalado Composer, podemos proceder con la instalación de la librería PHPSpreadSheet. Instrucciones en el siguiente enlace: </br>
https://phpspreadsheet.readthedocs.io/en/latest/#installation </br></br>
Funcionalidades:</br>
1. Página principal (Tratamiento Inditex), está divida por un encabezado y un body. </br>
![image](https://github.com/nahupb/bitacora/assets/141838996/af3c5c2f-5f49-4fe7-af3c-52e45ee87c5e) </br>
1a. Encabezado, está dividido por dos enlaces: Resueltos (véase apartado 2) y Nueva entrada. </br>
![image](https://github.com/nahupb/bitacora/assets/141838996/edcc0f2e-7e78-4672-b4f4-c11abbeb3c4f)</br>
- Nueva entrada cargará un formulario con los campos necesarios para la creación de un ticket. La entrada se creará en la BBDD con la columna RESUELTO="NO" por defecto. </br>
![image](https://github.com/nahupb/bitacora/assets/141838996/299b2daa-af60-4cb7-b695-43b4eb135753)</br>
- El script se asegura de que cada campo no esté vacío y que el string introducido siga el formato deseado. Por ejemplo: </br>
![image](https://github.com/nahupb/bitacora/assets/141838996/89a89a4a-b994-443d-a8d7-1693d73b2b51) </br>

1b. El body está compuesto por un DataTable que muestra todos los tickets almacenados en la BBDD bitacora. En la columna Acción tenemos tres botones para editar, resolver o eliminar una entrada. </br>
 ![image](https://github.com/nahupb/bitacora/assets/141838996/4e4f229f-06fd-4ad4-84cc-f8ec73fc1c58) </br>
- Editar entrada ![image](https://github.com/nahupb/bitacora/assets/141838996/876bde6d-fbff-4909-969a-6bc510cb1d83)
: Recoge de la BBDD toda la información perteneciente a el ticket seleccionado. </br>
![image](https://github.com/nahupb/bitacora/assets/141838996/1b2b7f79-96fc-42dd-8284-b9ff3398cff0) </br>
- Al igual que en la creación de un ticket, los parámetros introducidos en la edición deben seguir un formato. </br>
![image](https://github.com/nahupb/bitacora/assets/141838996/9c53c85f-1a99-441e-92ca-2be7f70f7f06) </br>








Botón editar</br>



Index</br>
![image](https://github.com/nahupb/bitacora/assets/141838996/af3c5c2f-5f49-4fe7-af3c-52e45ee87c5e) </br>




