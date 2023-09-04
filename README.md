# Introducción
> Se ha creado el proyecto con el propósito de automatizar la bitácora de escalados existente en el departamento de Telecomunicaciones N1. </br>
El proyecto está programado en PHP, JavaScript, HTML, CSS y SQL; y se han incluido las librerías DataTables, Bootstrap, jQuery, SweetAlert2 y PHPSpreadSheet. </br>
También se ha utilizado el programa Xampp para establecer la conexión entre la página web y la BBDD MySQL en local. </br>
Como requisito para la instalación de la librería PHPSpreadSheet se requiere el programa Composer. Descarga en el siguiente enlace: </br>
https://getcomposer.org/ </br>
Una vez instalado Composer, podemos proceder con la instalación de la librería PHPSpreadSheet. Instrucciones en el siguiente enlace: </br>
https://phpspreadsheet.readthedocs.io/en/latest/#installation

# Funcionalidades
### Página principal (Tratamiento Inditex), está divida por un encabezado y un body.

![image](https://github.com/nahupb/bitacora/assets/141838996/289125f9-9077-408d-819b-0a36047ce0b3)
</br></br>
#### Encabezado, está dividido por dos enlaces: Resueltos (véase apartado 2) y Nueva entrada. </br>
![image](https://github.com/nahupb/bitacora/assets/141838996/422b15f6-fb91-4cea-90b8-60ff984bdd8e)
</br>
- Nueva entrada cargará un formulario con los campos necesarios para la creación de un ticket. Por defecto, la entrada se creará en la BBDD con el valor "NO" en la columna RESUELTO. </br>
![image](https://github.com/nahupb/bitacora/assets/141838996/c414e6be-ce3e-440b-a737-bb36b4e3731c)
</br></br>
El script se asegura de que cada campo no esté vacío y que el string introducido siga el formato deseado. Por ejemplo: </br>
![image](https://github.com/nahupb/bitacora/assets/141838996/89a89a4a-b994-443d-a8d7-1693d73b2b51) </br></br>

1b. El body está compuesto por una DataTable que muestra todos los tickets almacenados en la BBDD bitacora. En la columna Acción tenemos tres botones para editar, resolver o eliminar una entrada. </br>
 ![image](https://github.com/nahupb/bitacora/assets/141838996/4e4f229f-06fd-4ad4-84cc-f8ec73fc1c58) </br></br>
- Editar entrada ![image](https://github.com/nahupb/bitacora/assets/141838996/869f3cef-c44a-475c-9de5-571baa3c9094):
recoge de la BBDD toda la información perteneciente al ticket seleccionado. </br>
![image](https://github.com/nahupb/bitacora/assets/141838996/12397f1a-2179-45d9-be6a-26823b64af66)
 </br></br>
Al igual que en la creación de un ticket, los parámetros introducidos en la edición deben seguir un formato. </br>
![image](https://github.com/nahupb/bitacora/assets/141838996/9c53c85f-1a99-441e-92ca-2be7f70f7f06) </br></br>
- Resolver entrada ![image](https://github.com/nahupb/bitacora/assets/141838996/31617505-6201-4000-841a-f7c151fda948):
al pulsar saltará un banner solicitando confirmación. En la BBDD, el valor "NO" se modificará por "SI" en la columna RESUELTO, por lo que el ticket se eliminará de Tratamiento Inditex y lo podremos visualizar en el apartado Resueltos: </br>
![image](https://github.com/nahupb/bitacora/assets/141838996/f9e9c9e0-f3a4-43c1-a831-2237893c4674) </br></br>
- Eliminar entrada ![image](https://github.com/nahupb/bitacora/assets/141838996/d586113b-662b-43af-a2eb-026538fd6db5): borra la entrada de forma permanente. También solicitará confirmación antes de aplicar los cambios: </br>
![image](https://github.com/nahupb/bitacora/assets/141838996/40539cc1-bda6-4f23-bcdb-33d950a99be0) </br></br>
- El body también cuenta con el botón ![image](https://github.com/nahupb/bitacora/assets/141838996/e24f3a4b-5c63-4e87-b060-f9b8112071e2)
para exportar todos los datos de la tabla a un excel en formato xlsx. Se han intentado asemejar todo lo posible los estilos con los del excel actual. Fichero de ejemplo: </br>
[bitacora.xlsx](https://github.com/nahupb/bitacora/files/12497266/bitacora.xlsx) </br></br>

<h2> 2. Resueltos, está divida por un encabezado y un body. </h2></br>

![image](https://github.com/nahupb/bitacora/assets/141838996/ba4811fb-71b4-4620-9bb1-5df74b18f912) 
</br></br>
Las funcionalidades son las mismas que en Tratamiento Inditex, únicamente se ha modificado el botón de editar por el de reabrir ![image](https://github.com/nahupb/bitacora/assets/141838996/97359d17-1abf-4cbb-86bc-133de0f64dad)</br></br>
Al pulsar el botón, saltará un banner solicitando confirmación. En la BBDD, el valor "SI" se modificará por "NO" en la columna RESUELTO, por lo que el ticket se eliminará de Resueltos y lo podremos visualizar en el apartado Tratamiento Inditex. </br>
![image](https://github.com/nahupb/bitacora/assets/141838996/6acf8497-4c03-47fb-b78f-2f28f2757927)













