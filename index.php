<?php 
    class Product {
        public $name;
        public $price;
        public $image;
        public $species;

        function __construct(String $_name, Float $_price, String $_image, Species $_species){
            $this->name = $_name;
            $this->price = $_price;
            $this->image = $_image;
            $this->species = $_species;
        }
    }

    class Food extends Product{
        public $weight;

        function __construct(String $_name, Float $_price, String $_image, Species $_species, String $_weight){
            parent::__construct($_name, $_price, $_image, $_species);
            $this->weight = $_weight;
        }
    }

    class Toy extends Product{
        public $size;

        function __construct(String $_name, Float $_price, String $_image, Species $_species, String $_size){
            parent::__construct($_name, $_price, $_image, $_species);
            $this->size = $_size;
        }
    }

    class Accessory extends Product{
        public $use;

        function __construct(String $_name, Float $_price, String $_image, Species $_species, String $_use){
            parent::__construct($_name, $_price, $_image, $_species);
            $this->use = $_use;
        }
    }

    class Species {
        public $species;
        public $logo;

        function __construct(String $_species, String $_logo){
            $this->species = $_species;
            $this->logo = $_logo;
        }
    }

    $species = [
        'feline' => new Species('Cats', '<i class="fa-solid fa-cat"></i>'),
        'canine' => new Species('Dogs', '<i class="fa-solid fa-dog"></i>'),
        'aviate' => new Species('Birds', '<i class="fa-solid fa-crow"></i>'),
        'acquatics' => new Species('Fishes', '<i class="fa-solid fa-fish-fins"></i>'),
    ];

    $products = [
        new Food('Royal Canin Mini Adult', 20, 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', $species['canine'], '10kg'),
        new Food('Almo Nature Holistic Adult', 20, 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', $species['canine'], '10kg'),
        new Food('Almo Daily Menu Cat', 7.50, 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', $species['feline'], '0.4kg'),
        new Food('Guppy in Flakes', 5, 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', $species['acquatics'], '0.1kg'),
        new Accessory('Voliera Wilma', 39.50, 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', $species['aviate'], 'Housing'),
        new Accessory('Tetra Easycristal Water Filters', 30, 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', $species['acquatics'], 'Health'),
        new Toy('Kong Classic', 10, 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', $species['canine'], 'Small'),
        new Toy('Trixie Mouse Peluche', 10, 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', $species['feline'], 'Small'),
    ];
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/dcdaab4f9f.js" crossorigin="anonymous"></script>
        <title>Document</title>
    </head>
    <body>
        
    </body>
</html>