<?php

class Animals {
  public $name;
  public $category;

  function __construct()
  {
    # initliztion code...
  }

}

//creating instance of Animals class
$objAnimals = new Animals();

//setting properties
$objAnimals->name = "Lion";
$objAnimals->category = "Wild Animal";

//copying object
$objCopied = $objAnimals;
$objCopied->name = "Cat";
$objCopied->category = "Pet Animal";
print_r($objAnimals);
print_r($objCopied);

?>
