<?php
require_once 'Db.php';
require_once __DIR__.'../../Entity/Products.php';

// contient toutes les requêtes de la table product
class ProductsRepository extends Db{

    public function add(Products $product){
        try {
            $query = $this->getDb()->prepare('INSERT INTO products (supplier_id, category_id, quantity_id, type_id, name, description, image, price) VALUES (:supplier_id, :category_id, :quantity_id, :type_id, :name, :description, :image, :price)');
            $query->bindValue(':supplier_id',$product->getSupplier_id())
                ->bindValue(':category_id',$product->getCategory_id())
                ->bindValue(':quantity_id',$product->getQuantity_id())
                ->bindValue(':type_id',$product->getType_id())
                ->bindValue(':name',$product->getName())
                ->bindValue(':description',$product->getDescription())
                ->bindValue(':image',$product->getImage())
                ->bindValue(':price',$product->getPrice());
        } catch (Exception $e) {
            die("Erreur lors de l'insertion:{$e->getMessage()}");
        }

        // on retourne l'exécution, si l'insertion fonctionne ça renvoie true sinon false
        return $query->execute();
    }

    public function show(){
        $query = $this->getDb()->query('SELECT * FROM products');
        $allProducts = $query->fetchAll();
        foreach($allProducts as $product){
            $productObject = (new Products())
                ->setId($product['id'])
                ->setSupplier_id($product['supplier_id'])
                ->setCategory_id($product['category_id'])
                ->setQuantity_id($product['quantity_id'])
                ->setType_id($product['type_id'])
                ->setName($product['name'])
                ->setDescription($product['description'])
                ->setImage($product['image'])
                ->setPrice($product['price']);

            // stocke chaque objet product dans un tableau
            $objects[] = $productObject;
        }
        return $objects ?? [];
    }

    public function showByCategoryId($id){
        $query = $this->getDb()->prepare('SELECT * FROM products WHERE category_id=:category_id');
        $query->bindValue(':category_id', $id, PDO::PARAM_INT);
        $query->execute();
        $productsByCategory = $query->fetchAll();
        if($productsByCategory){
            foreach($productsByCategory as $productByCategory){
                $productObjectByCategory = (new Products())
                    ->setId($productByCategory['id'])
                    ->setSupplier_id($productByCategory['supplier_id'])
                    ->setCategory_id($productByCategory['category_id'])
                    ->setQuantity_id($productByCategory['quantity_id'])
                    ->setType_id($productByCategory['type_id'])
                    ->setName($productByCategory['name'])
                    ->setDescription($productByCategory['description'])
                    ->setImage($productByCategory['image'])
                    ->setPrice($productByCategory['price']);
    
                $objectsByCategory[] = $productObjectByCategory;
            }
        }
        return $objectsByCategory ?? [];
    }

    public function delete($id){
        try {
            $query = $this->getDb()->prepare('DELETE FROM products WHERE id=:id');
            $query->bindValue(':id', $id, PDO::PARAM_INT);
        } catch (Exception $e) {
            die("Erreur lors de la suppression:{$e->getMessage()}");
        }
        return $query->execute();
    }

    public function showWhitId($id){
        $query = $this->getDb()->prepare('SELECT * FROM products WHERE id=:id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $product = $query->fetch();
        if($product){
            $productObject = (new Products())
                ->setId($product['id'])
                ->setSupplier_id($product['supplier_id'])
                ->setCategory_id($product['category_id'])
                ->setQuantity_id($product['quantity_id'])
                ->setType_id($product['type_id'])
                ->setName($product['name'])
                ->setDescription($product['description'])
                ->setImage($product['image'])
                ->setPrice($product['price']);
            
            $objects[] = $productObject;
        }
        return $productObject ?? false;
    }
 
    public function update($product){
        try {
            $query = $this->getDb()->prepare('UPDATE avis SET content=:content WHERE id=:id');
            $query->bindValue(':id', $product->getId(), PDO::PARAM_INT)
                ->bindValue(':supplier_id',$product->getSupplier_id())
                ->bindValue(':category_id',$product->getCategory_id())
                ->bindValue(':quantity_id',$product->getQuantity_id())
                ->bindValue(':type_id',$product->getType_id())
                ->bindValue(':name',$product->getName())
                ->bindValue(':description',$product->getDescription())
                ->bindValue(':image',$product->getImage())
                ->bindValue(':price',$product->getPrice());
        } catch (Exception $e) {
            die("Erreur lors de l'édition':{$e->getMessage()}");
        }
        return $query->execute();
    }
}