Se ha creado el proyecto con el propósito de automatizar la bitácora de escalados existente en el departamento de Telecomunicaciones N1. </br>
El proyecto está programado en PHP, JavaScript, HTML, CSS y SQL; y se han incluido las librerías DataTables, Bootstrap, jQuery, SweetAlert2 y PHPSpreadSheet. </br>
También se ha utilizado el programa Xampp para establecer la conexión entre la página web y la BBDD MySQL en local. </br>
Como requisito para la instalación de la librería PHPSpreadSheet se requiere el programa Composer. Descarga en el siguiente enlace: </br>
https://getcomposer.org/ </br>
Una vez instalado Composer, podemos proceder con la instalación de la librería PHPSpreadSheet. Instrucciones en el siguiente enlace: </br>
https://phpspreadsheet.readthedocs.io/en/latest/#installation </br></br>
Funcionalidades:</br>
<h1> 1. Página principal (Tratamiento Inditex), está divida por un encabezado y un body. </h1></br>
![image](https://github.com/nahupb/bitacora/assets/141838996/af3c5c2f-5f49-4fe7-af3c-52e45ee87c5e) </br>
1a. Encabezado, está dividido por dos enlaces: Resueltos (véase apartado 2) y Nueva entrada. </br>
![image](https://github.com/nahupb/bitacora/assets/141838996/edcc0f2e-7e78-4672-b4f4-c11abbeb3c4f)</br>
- Nueva entrada cargará un formulario con los campos necesarios para la creación de un ticket. Por defecto, la entrada se creará en la BBDD con el valor "NO" en la columna RESUELTO. </br>
![image](https://github.com/nahupb/bitacora/assets/141838996/299b2daa-af60-4cb7-b695-43b4eb135753)</br>
- El script se asegura de que cada campo no esté vacío y que el string introducido siga el formato deseado. Por ejemplo: </br>
![image](https://github.com/nahupb/bitacora/assets/141838996/89a89a4a-b994-443d-a8d7-1693d73b2b51) </br>

1b. El body está compuesto por un DataTable que muestra todos los tickets almacenados en la BBDD bitacora. En la columna Acción tenemos tres botones para editar, resolver o eliminar una entrada. </br>
 ![image](https://github.com/nahupb/bitacora/assets/141838996/4e4f229f-06fd-4ad4-84cc-f8ec73fc1c58) </br>
- Editar entrada ![image](https://github.com/nahupb/bitacora/assets/141838996/876bde6d-fbff-4909-969a-6bc510cb1d83)
: recoge de la BBDD toda la información perteneciente a el ticket seleccionado. </br>
![image](https://github.com/nahupb/bitacora/assets/141838996/1b2b7f79-96fc-42dd-8284-b9ff3398cff0) </br>
Al igual que en la creación de un ticket, los parámetros introducidos en la edición deben seguir un formato. </br>
![image](https://github.com/nahupb/bitacora/assets/141838996/9c53c85f-1a99-441e-92ca-2be7f70f7f06) </br>
- Resolver entrada ![image](https://github.com/nahupb/bitacora/assets/141838996/31617505-6201-4000-841a-f7c151fda948):
Al pulsar saltará un banner solicitando confirmación. En la BBDD, el valor "NO" se modificará por "SI" en la columna RESUELTO, por lo que el ticket se eliminará de Tratamiento Inditex y lo podremos visualizar en el apartado Resueltos: </br>
![image](https://github.com/nahupb/bitacora/assets/141838996/f9e9c9e0-f3a4-43c1-a831-2237893c4674) </br>
- Eliminar entrada ![image](https://github.com/nahupb/bitacora/assets/141838996/d586113b-662b-43af-a2eb-026538fd6db5): borra la entrada de forma permanente. También solicitará confirmación antes de aplicar los cambios: </br>
![image](https://github.com/nahupb/bitacora/assets/141838996/40539cc1-bda6-4f23-bcdb-33d950a99be0) </br>
- El body también cuenta con el botón  ![image](https://github.com/nahupb/bitacora/assets/141838996/d980c9c5-b043-41a1-b34c-e5621120e401)
para exportar todos los datos de la tabla a un excel en formato xlsx. Se han intentado asemejar todo lo posible los estilos con los del excel actual. Fichero de ejemplo: </br></br>
[bitacora.xlsx](https://github.com/nahupb/bitacora/files/12497266/bitacora.xlsx) </br>

<h1> 2. Resueltos, está divida por un encabezado y un body. </h1></br>
![image](https://github.com/nahupb/bitacora/assets/141838996/ba4811fb-71b4-4620-9bb1-5df74b18f912) </br>
Las funcionalidades son las mismas que en Tratamiento Inditex, únicamente se ha modificado el botón de editar por el de reabrir ![image](https://github.com/nahupb/bitacora/assets/141838996/97359d17-1abf-4cbb-86bc-133de0f64dad)</br>
Al pulsar el botón, saltará un banner solicitando confirmación. En la BBDD, el valor "SI" se modificará por "NO" en la columna RESUELTO, por lo que el ticket se eliminará de Resueltos y lo podremos visualizar en el apartado Tratamiento Inditex. </br>
![image](https://github.com/nahupb/bitacora/assets/141838996/6acf8497-4c03-47fb-b78f-2f28f2757927)












