<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/style/style.css">
    <script src="../public/javascript/typeSwitcher.js"></script>
</head>

<body>
    <h1>Product Add</h1>
    <a href="http://localhost/test-Scandiweb/products">View products</a><br></br>

    <form action="http://localhost/test-Scandiweb/products/createProduct" method="POST">
        <label for="SKU">SKU: </label>
        <input type="text" name="SKU" id="SKU" required><br></br>
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" required><br></br>
        <label for="price">Price: </label>
        <input type="text" name="price" onkeyup="numbersOnly(this)" id="price" required><br></br>

        <select name="typeSwitcher" id="typeSwitcher" onchange="myFunction()">
            <option value="optionMovie" id="movie">Movie</option>
            <option value="optionBook" id="book">Book</option>
            <option value="optionFurniture" id="furniture">Furniture</option>
        </select><br></br>

        <div id="size">
            <label for="size">Size: </label>
            <input type="text" name="size" id="sizeMB" onkeyup="numbersOnly(this)">
            <p>Please, provide size in MB</p><br></br>
        </div>
        <div id="height" style="display:none">
            <label for="height">Height: </label>
            <input type="text" name="height" id="dimensionHeight" onkeyup="numbersOnly(this)"><br></br>
        </div>
        <div id="width" style="display:none">
            <label for="width">Width: </label>
            <input type="text" name="width" id="dimensionWidth" onkeyup="numbersOnly(this)"><br></br>
        </div>
        <div id="length" style="display:none">
            <label for="length">Length: </label>
            <input type="text" name="length" id="dimensionLength" onkeyup="numbersOnly(this)">
            <p>Please, provide dimensions in HxWxL format</p><br></br>
        </div>

        <div id="weight" style="display:none">
            <label for="weight">Weight: </label>
            <input type="text" name="weight" id="weightKG" onkeyup="numbersOnly(this)">
            <p>Please, provide weight in KG</p><br></br>
        </div>

        <button name="submit" type="submit">Add</button>
        <input type="button" value="Cancel" class="cancelBtn" onClick="document.location.href='http://localhost/test-Scandiweb/products';" />

    </form>

</body>

</html>