integrantes :Melchior, Henry(henrymelchior028@gmail.com); Palucci, Milton Alejo(miltonpalucci02@gmail.com)

tematica: tienda de ropa

descripcion: sitio web dedicado a la venta y distribucion de ropa 

ENDPOINTS
------------------------------------------------
OBTENER todas las categorías.

Método: GET

URL: /api/categories

Ejemplo de uso: GET /api/categories
------------------------------------------------
OBTENER prendas por categoría.

Método: GET

URL: /api/categories/:ID

Ejemplo de uso: GET /api/categories/:ID
------------------------------------------------
ELIMINAR una categoría por ID.

Método: DELETE 

URL: /api/categories/:ID

Ejemplo de uso: DELETE /api/categories/:ID
------------------------------------------------
INSERTAR una nueva categoría.

Método: POST

URL: /api/categories

Ejemplo de uso: POST /api/categories
------------------------------------------------
EDITAR una categoría por ID.

Método: PUT

URL: /api/categories/:ID

Ejemplo de uso: PUT /api/categories/:ID(id_categoria)
------------------------------------------------
ORDENA las categorías por id.

Método: GET

URL: /api/categoriesOrder/:order

Ejemplo de uso: GET /api/categoriesOrder/order(ASC/DESC)
------------------------------------------------
ORDENA las categorías.

Método: GET

URL: /api/categorieOrderById/:ID/:order

Ejemplo de uso: GET /api/categorieOrderById/1(id_categoria)/order(ASC/DESC)
------------------------------------------------
FILTRADO de las categorías.

Método: GET

URL: /api/categoriesFilter/:letter

Ejemplo de uso: GET /api/categoriesFilter/letter(letra por la cual se quiere filtrar)
------------------------------------------------
PAGINADO de las categorías.

Método: GET

URL: /api/categorie/:page

Ejemplo de uso: GET /api/categorie/page(Numero de la pagina, 1-2-3-...)