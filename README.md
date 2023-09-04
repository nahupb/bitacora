# Introducción
> El proyecto nace con el propósito de automatizar la bitácora de escalados utilizada en el departamento de Telecomunicaciones N1 de Inditex.

# Funcionalidades
## 1. Tratamiento Inditex

La página está formada por un encabezado y un body.
> ![image](https://github.com/nahupb/bitacora/assets/141838996/289125f9-9077-408d-819b-0a36047ce0b3).

- **Encabezado,** consta de dos enlaces: Resueltos (véase apartado 2) y Nueva entrada. ![image](https://github.com/nahupb/bitacora/assets/141838996/422b15f6-fb91-4cea-90b8-60ff984bdd8e)
    - **Nueva entrada** cargará un formulario con los campos necesarios para la creación de un ticket. Al pulsar el botón Submit, la entrada se creará en la BBDD con el valor "NO" en la columna RESUELTO. ![image](https://github.com/nahupb/bitacora/assets/141838996/c414e6be-ce3e-440b-a737-bb36b4e3731c) </br>
El script se asegura de que cada campo no esté vacío y que el string introducido siga el formato deseado. ![image](https://github.com/nahupb/bitacora/assets/141838996/89a89a4a-b994-443d-a8d7-1693d73b2b51)

- **Body:** está compuesto por una tabla con buscador que muestra todos los tickets almacenados en la BBDD. En la columna Acción tenemos tres botones para editar, resolver o eliminar una entrada. ![image](https://github.com/nahupb/bitacora/assets/141838996/4e4f229f-06fd-4ad4-84cc-f8ec73fc1c58)
    - **Editar entrada** ![image](https://github.com/nahupb/bitacora/assets/141838996/869f3cef-c44a-475c-9de5-571baa3c9094)**:**
recoge de la BBDD toda la información asociada al ticket seleccionado. ![image](https://github.com/nahupb/bitacora/assets/141838996/12397f1a-2179-45d9-be6a-26823b64af66) </br>Al igual que en la creación de un ticket, los parámetros introducidos en la edición deben seguir un formato. ![image](https://github.com/nahupb/bitacora/assets/141838996/9c53c85f-1a99-441e-92ca-2be7f70f7f06)
    - **Resolver entrada ![image](https://github.com/nahupb/bitacora/assets/141838996/31617505-6201-4000-841a-f7c151fda948):**
al hacer clic saltará un banner solicitando confirmación. En la BBDD, el valor "NO" se modificará por "SI" en la columna RESUELTO, por lo que el ticket se eliminará de Tratamiento Inditex y lo podremos visualizar en el apartado Resueltos. ![image](https://github.com/nahupb/bitacora/assets/141838996/f9e9c9e0-f3a4-43c1-a831-2237893c4674)
    - **Eliminar entrada ![image](https://github.com/nahupb/bitacora/assets/141838996/d586113b-662b-43af-a2eb-026538fd6db5):** borra la entrada de forma permanente. También solicitará confirmación antes de aplicar los cambios. ![image](https://github.com/nahupb/bitacora/assets/141838996/40539cc1-bda6-4f23-bcdb-33d950a99be0)

> [!NOTE]
> El body también cuenta con el botón ![image](https://github.com/nahupb/bitacora/assets/141838996/e24f3a4b-5c63-4e87-b060-f9b8112071e2)
para exportar todos los datos de la tabla a un excel en formato xlsx. Se ha intentado que los estilos se asemejen lo máximo posible a los del excel actual. Fichero de ejemplo: [bitacora.xlsx](https://github.com/nahupb/bitacora/files/12497266/bitacora.xlsx)

> [!NOTE]
> En el buscador podemos filtrar por cualquier palabra o frase ![image](https://github.com/nahupb/bitacora/assets/141838996/fd6c48ce-a1e1-42b6-84aa-f15efd49eab9)


## 2. Resueltos

La página está formada por un encabezado y un body.
> ![image](https://github.com/nahupb/bitacora/assets/141838996/ba4811fb-71b4-4620-9bb1-5df74b18f912) 

Las funcionalidades son las mismas que en Tratamiento Inditex, únicamente se ha sustituido el botón de resolver por el de reabrir ![image](https://github.com/nahupb/bitacora/assets/141838996/97359d17-1abf-4cbb-86bc-133de0f64dad)

Al pulsar el botón, saltará un banner solicitando confirmación. En la BBDD, el valor "SI" se modificará por "NO" en la columna RESUELTO, por lo que el ticket se eliminará de Resueltos y lo podremos visualizar en el apartado Tratamiento Inditex.
> ![image](https://github.com/nahupb/bitacora/assets/141838996/6acf8497-4c03-47fb-b78f-2f28f2757927)

## Librerías

- [DataTables](https://datatables.net/)
- [Bootstrap](https://getbootstrap.com/)
- [jQuery](https://jquery.com/)
- [SweetAlert2](https://sweetalert2.github.io/)
- [Xampp](https://www.apachefriends.org/es/index.html)
- [Composer](https://getcomposer.org/)
- [PHPSpreadSheet](https://phpspreadsheet.readthedocs.io/en/latest/#installation)
