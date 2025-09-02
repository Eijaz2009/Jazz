<?php

class ProductModel extends Connection
{
    // protect variable untuk kebutuhan insert data
    protected $name;
    protected $price;
    protected $stock;

    protected function findAll()
    {
        $sql = "SELECT * FROM product";
        $result = $this->connect()->query($sql); //call function dari default mysql
        if ($result->num_rows > 0 ) {
            while ($data = mysql_fetch_assoc($result)) {
                $product[] = $data;
            }
            return $product;
        }
    }

    protected function findOne($id)
    {
        $sql = "SELECT * FROM product WHERE id = " . $id;
        $result = $this->connect()->query($sql);
        if ($result->num_rows > 0) {
            while ($data = mysql_fetch_assoc($result)) {
                $product[] = $data;
            }
            return $product;
        }
    }
}
?>