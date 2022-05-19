<?php

class Products {
    private int $id;
    private int $supplier_id;
    private int $category_id;
    private int $quantity_id;
    private int $type_id;
    private string $name;
    private string $description;
    private string $image;
    private int $price;

    /**
     * Get the value of supplier_id
     */ 
    public function getSupplier_id()
    {
        return $this->supplier_id;
    }

    /**
     * Set the value of supplier_id
     *
     * @return  self
     */ 
    public function setSupplier_id(?int $supplier_id)
    {
        $this->supplier_id = $supplier_id;

        return $this;
    }

    /**
     * Get the value of category_id
     */ 
    public function getCategory_id()
    {
        return $this->category_id;
    }

    /**
     * Set the value of category_id
     *
     * @return  self
     */ 
    public function setCategory_id(?int $category_id)
    {
        $this->category_id = $category_id;

        return $this;
    }
    
    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }


    /**
     * Get the value of quantity_id
     */ 
    public function getQuantity_id()
    {
        return $this->quantity_id;
    }

    /**
     * Set the value of quantity_id
     *
     * @return  self
     */ 
    public function setQuantity_id($quantity_id)
    {
        $this->quantity_id = $quantity_id;

        return $this;
    }

    /**
     * Get the value of type_id
     */ 
    public function getType_id()
    {
        return $this->type_id;
    }

    /**
     * Set the value of type_id
     *
     * @return  self
     */ 
    public function setType_id($type_id)
    {
        $this->type_id = $type_id;

        return $this;
    }
}