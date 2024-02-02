<?php 
    class Product {
        public $name;
        private $price;
        public $image;
        public $species;

        function __construct(String $_name, Float $_price, String $_image, Species $_species){
            $this->name = $_name;
            $this->price = $_price;
            $this->image = $_image;
            $this->species = $_species;
        }

        public function getDiscountedPrice($discount){
            return $this->price*$discount;
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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">
                        Shop Smart: Shop S-Mart!
                    </h1>
                    <h2 class="text-center">
                        Pet Shop Edition
                    </h2>
                </div>
                <div class="col-12">
                    <div class="row">
                        <?php 
                            foreach($products as $product){
                                echo '<div class="col-3 my-my-7">';
                                echo '<h4 class="text-center">'.$product->name.'</h4>';
                                echo '<img src="'.$product->image.'" alt="'.$product->name.'" class="w-100 h-100">';
                                echo '<div class="fw-bold">Price: <span class="fw-normal">'.number_format($product->getDiscountedPrice(1), 2, '.', '').'$</span></div>';
                                echo '<div class="fw-bold">Species: '.$product->species->logo.'</div>';
                                echo '<div class="fw-bold">Product Type: <span class="fw-normal">'.get_class($product).'</span></div>';
                                if(get_class($product) == "Food"){
                                    echo '<div class="fw-bold">Weight: <span class="fw-normal">'.$product->weight.'</span></div>';
                                }
                                if(get_class($product) == "Toy"){
                                    echo '<div class="fw-bold">Size: <span class="fw-normal">'.$product->size.'</span></div>';
                                }
                                if(get_class($product) == "Accessory"){
                                    echo '<div class="fw-bold">Use: <span class="fw-normal">'.$product->use.'</span></div>';
                                }
                                echo '</div>';
                            }

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>