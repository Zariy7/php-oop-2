<?php 
    class Product {
        public $name;
        public $price;
        public $image;
        public $species;

        function __construct(String $_name, Float $_price, String $_image, Species $_species){
            $this->$name = $_name;
            $this->$price = $_price;
            $this->$image = $_image;
            $this->$species = $_species;
        }
    }

    class Food extends Product{
        public $weight;

        function __construct(String $_name, Float $_price, String $_image, Species $_species, String $_weight){
            parent::__construct($_name, $_price, $_image, $_species);
            $this->$weight = $_weight;
        }
    }

    class Toys extends Product{
        public $size;

        function __construct(String $_name, Float $_price, String $_image, Species $_species, String $_size){
            parent::__construct($_name, $_price, $_image, $_species);
            $this->$size = $_size;
        }
    }

    class Accessories extends Product{
        public $use;

        function __construct(String $_name, Float $_price, String $_image, Species $_species, String $_use){
            parent::__construct($_name, $_price, $_image, $_species);
            $this->$use = $_use;
        }
    }

    class Species {
        public $species;
        public $logo;

        function __construct(String $_species, String $_logo){
            $this->$species = $_species;
            $this->$logo = $_logo;
        }
    }
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
    </body>
</html>