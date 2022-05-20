    <!-- dans adminController -->
    $selectedCategory = $ProductsRepository->selectedCategory($_GET['id']);
    var_dump($selectedCategory);

    dans ProductsRepository 
    // voir la catégorie d'un produit en fonction de son ID
    public function selectedCategory($id){
        $query = $this->getDb()->prepare('SELECT category_id FROM products WHERE id=:id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $selectedCategory = $query->fetch();
        return $selectedCategory;
    }

    <!-- manque l'affichage du nom en fct de la cétégorie -->
       <!-- <option value="<?= $selectedCategory->getCategory_id()?>"><?= $selectedCategory->getCategory_id()?></option> -->