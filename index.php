<?php
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Category.php";

$category_dog = new Category('Dog', '<i class="fa-solid fa-dog"></i>');
$category_cat = new Category('Cat', '<i class="fa-solid fa-cat"></i>');
$category_bird = new Category('Bird', '<i class="fa-solid fa-dove"></i>');
$category_fish = new Category('Fish', '<i class="fa-solid fa-fish"></i>');


$product1 = new Products(10, 'Guinzaglio', 'Lorem Ipsum Guinzaglio', $category_dog, 15.99, '#');
$product2 = new Products(20, 'Osso per cani', 'Lorem Ipsum Osso', $category_dog, 27.99, '#');

// var_dump($product1);

$products = [
    $product1,
    $product2
]
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product->get_name(); ?></h5>
                        <p class="card-text"><?php echo $product->get_description(); ?></p>
                        <p class="card-text"><?php echo $product->get_price(); ?>$</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</body>

</html>