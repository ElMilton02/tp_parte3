<?php

require_once './config.php';
require_once './apps/models/model.php';

class ClothesModel extends Model
{


    function getClothesByCategorie($href)
    {

        $query = $this->db->prepare('SELECT * FROM ropas WHERE id_categoria = ?');
        $query->execute([$href]);

        // $categorias es un arreglo de categorias
        $categorie2 = $query->fetchAll(PDO::FETCH_OBJ);

        return $categorie2;
    }

    public function getClothesOrderedByIdCategories($id, $order) {

        $query = $this->db->prepare("SELECT * FROM ropas WHERE id_categoria = ? ORDER BY id_ropas $order");
        $query->execute([$id]);

        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    
    
    function deleteClothes($idClothes)
    {

        $query = $this->db->prepare('DELETE FROM ropas WHERE id_ropas = ?');
        $query->execute([$idClothes]);
    }

    function insertClothes($id_Categorie, $nombre_ropa, $precio_ropa)
    {
        // Obtener la conexión y asignarla a $this->db
        $query = $this->db->prepare('INSERT INTO ropas (id_categoria, nombre_ropa, precio_ropa) VALUES (?, ?, ?)');

        $query->execute([$id_Categorie, $nombre_ropa, $precio_ropa]);
        return $this->db->lastInsertId();
    }

    public function modifyClothes($idClothes, $newName, $newPrice)
    {

        $query = $this->db->prepare('UPDATE ropas SET nombre_ropa = ?, precio_ropa = ? WHERE id_ropas = ?');
        $query->execute([$newName, $newPrice, $idClothes]);
    }
}
