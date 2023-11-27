integrantes :Melchior, Henry(henrymelchior028@gmail.com); Palucci, Milton Alejo(miltonpalucci02@gmail.com)

tematica: tienda de ropa

descripcion: sitio web dedicado a la venta y distribucion de ropa 

# Endpoints


OBTENER todas las categorías.

Método: GET

URL: /api/categories

Descripción: Este endpoint devuelve todas las categorías de prendas disponibles.

Ejemplo de uso: GET /api/categories

OBTENER prendas por categoría.

Método: GET

URL: /api/categories/:ID

Descripción: Devuelve la lista de prendas que pertenecen a una categoría específica, donde {ID} es el ID de la categoría.

Ejemplo de uso: GET /api/categories/:ID

ELIMINAR una categoría por ID.

Método: DELETE //ver de largar advertencia cuando la categoria no esta vacia

URL: /api/categories/:ID

Descripción: Elimina una categoría específica según su ID.

Ejemplo de uso: DELETE /api/categories/:ID

INSERTAR una nueva categoría.

Método: POST

URL: /api/categories

Descripción: Permite agregar una nueva categoría.

Ejemplo de uso: POST /api/categories

 JSON para poder 
agregar categoria: 

                    {
                        "categorie": "(Nombre_Categoria)" (VARCHAR)
                    }

EDITAR una categoría por ID.

Método: PUT

URL: /api/categories/:ID

Descripción: Permite modificar una categoría existente según su ID.

Ejemplo de uso: PUT /api/categories/:ID(id_categoria)

JSON para poder 
editar categoria:  

                    {
                        "categorie": "(Nombre_Categoria)" (VARCHAR)
                    }

ORDENA las categorías por id.

Método: GET

URL: /api/categoriesOrder/:order

Descripción: Permite ordenar las categorías existente de manera asendente o desendente.

Ejemplo de uso: GET /api/categoriesOrder/order(ASC/DESC) 

ORDENA las categorías.

Método: GET

URL: /api/categorieOrderById/:ID/:order

Descripción: Permite ordenar las prendas de manera asendente o desendente segun un id de categorías especifica.

Ejemplo de uso: GET /api/categorieOrderById/1(id_categoria)/order(ASC/DESC)  

FLITRADO de las categorías.

Método: GET

URL: /api/categoriesFilter/:letter

Descripción: Permite filtrar todas las categorias que empiecen segun una letra especificada en la URL.

Ejemplo de uso: GET /api/categoriesFilter/letter(letra por la cual se quiere filtrar)

PAGINADO de las categorías.

Método: GET

URL: /api/categorie/:page

Descripción: Permite paginar por 3 categorias por pagina.

Ejemplo de uso: GET /api/categorie/page(Numero de la pagina, 1-2-3-...)