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