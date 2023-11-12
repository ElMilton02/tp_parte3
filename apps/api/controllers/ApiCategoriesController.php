<?php
require_once './apps/api/controllers/ApiController.php';
require_once './apps/models/model.php';
require_once './apps/models/CategoriesModel.php';
require_once './apps/models/ClothesModel.php';



class ApiCategoriesController extends ApiController{
    
    private $model;

    function __construct()
    {
        parent::__construct(); // Llamamos al constructor del padre
        $this->model = new CategoriesModel();
    }
    
    public function getCategories($params = [])
    {
        if (empty($params)) {
            $categories = $this->model->getCategories();
            $this->view->response(['msg' => 'Datos de las categorias obtenidos con éxito', 'categories' => $categories], 200);
        } else {
            // Cambio CategoriesModel a CategorieModel (peguntar si esta bien instanciarla  asi)
            $ClothesModel = new ClothesModel();
            $Clothes = $ClothesModel->getClothesByCategorie($params[':ID']);
            if (!empty($Clothes)) {
                $this->view->response(['msg' => 'Datos del las prendas por categoria obtenidos con éxito', 'Clothes' => $Clothes], 200);
            } else {
                $this->view->response(['msg' => "El ID ".$params[':ID'].": no existe"], 404);
                return;
            }
        }
    }

    public function delete($params = [])
    {
        $idCategorie = $params[':ID'];
        
        if (!$this->model->categoriaExiste($idCategorie)) {
            $this->view->response(['msg' => 'La categoría ' . $idCategorie .  ' especificada no existe'], 404);
            return;
        }
        if($idCategorie){
            $this->model->deleteCategoria($idCategorie );
            // Eliminación exitosa, redirige a la página de categorías
            $this->view->response(['msg' => "Se elimino correctamente ".$idCategorie], 200);
        }
    }

    public function create($params = [])
    {
        //obtengo el body q me envia el cliente
        $body =  $this->getData(); //desarma json nos genera un obj

        $categorie = $body->categorie;
        //despues hacer control
        if (empty($categorie)) {
            $this->view->response(['msg' => 'Campo incompleto'], 400);
        } else {
            $this->model->insertCategorie($categorie);
            $this->view->response(['msg' => 'La categoría fue agregada con éxito.', 'Categoria' => $categorie], 201);

        }
    }

    public function updateCategoria($params = [])
    {
        $id= $params[':ID'];
        $categorie = $this->model->getCategorieById($id);

        if (!$this->model->categoriaExiste($id)) {
            $this->view->response(['msg' => 'La categoría ' . $id .  ' especificada no existe'], 401);
            return;
        }
        if(!empty($id)){
            if($categorie){
                $body = $this->getData();
                $newCategoria= $body->categorie;
                $this->model->modifyCategorie($newCategoria, $id);
                $this->view->response(['msg' => 'La categoría fue modificada con éxito.', 'Categoria' => $categorie], 200);
            } else {
                $this->view->response(['msg' => "El ID ".$id.": no existe"], 404);
                return;
            }
        } else {
            $this->view->response(['msg' => "Campo vacio"], 400);
            return;
        }
  
    }
}
    
