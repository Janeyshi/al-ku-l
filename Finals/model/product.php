<<?php
  /**
   *
   */
  class Product
  {

    private $imgSource;
    private $productName;
    private $productDesc;
    private $productPrice;
    private $qty;

    public function __constructor(){
     $qty = 0;
   }

    public function instantiate($imgSource, $productName, $productDesc, $productPrice){
       $this->imgSource = $imgSource;
       $this->productName = $productName;
       $this->productDesc = $productDesc;
       $this->productPrice = $productPrice;
     }

    public function __get($fieldName){
      return $this->$fieldName;
    }

    public function __set($fieldName, $fieldValue){
      $this->$fieldName = $fieldValue;
    }
  }

 ?>
