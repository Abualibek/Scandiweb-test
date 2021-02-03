<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/style/style.css">
    <!-- <script src="../public/javascript/typeSwitcher.js"></script> -->
</head>

<body>
    <div class="container">
        <form action="<?php echo URL_ROOT; ?>/products/delete" method="POST">
            <h1>Product List</h1>
            <div class="btns">
                <a href="<?php echo URL_ROOT; ?>/products/createProduct" class="button button1">Add product</a>
                <input type="submit" name="delete" Value="Delete" class="deleteBtn">
            </div>
            
            <svg height="10" width="1300" style="margin-left: 50px">
                <line x1="0" y1="0" x2="1250" y2="0" style="stroke:rgb(0,0,0);stroke-width:5" />
            </svg>

            <?php foreach ($data['products'] as $product) : ?>
                <div class="main">
                    <input type="checkbox" id="<?php $product->id ?>" name="product_ids[]" value="<?php echo $product->id; ?>">

                    <?php echo $product->sku ?><br>
                    <?php echo $product->name ?><br>
                    <?php
                    if ($product->price) {
                        echo $product->price . '$';
                    }
                    ?><br>
                    <?php
                    if ($product->size) {
                        echo 'Size: ' . $product->size . 'MB';
                    }
                    ?>
                    <?php
                    if ($product->height) {
                        echo 'Dimensions: ' . $product->height . 'x',
                        $product->width . 'x',
                        $product->length;
                    }
                    ?>
                    <?php
                    if ($product->weight) {
                        echo 'Weight: ' . $product->weight . 'KG';
                    }
                    ?>
                </div>
            <?php endforeach; ?>
        </form>
    </div>
</body>
</html>