<?php
class ProductController extends ProductModel
{
    public function getProducts()
    {
        //call query function di model product
        return $this->findAll();
    }
    public function getProductsBy()
    {
        if (!isset($_GET['id'])) {
            return;
        }
        $onlyId = preg_replace('/\D/','', $_GET['id']);
        if ($onlyId !== "") {
            return $this->findOne($_GET['id']);
        }
    }
}
?>