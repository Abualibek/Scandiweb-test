<?php
class ProductsController extends Controller
{
    //Read data
    public function __construct()
    {
        $this->productModel = $this->model('Product');
    }

    
    public function products()
    {
        $products = $this->productModel->getProduct();
        $data = [
            'products' => $products
        ];
        $this->view('products', $data);
    }

    public function createProduct()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'SKU' => trim($_POST['SKU']),
                'name' => trim($_POST['name']),
                'price' => trim($_POST['price']),
                'size' => trim($_POST['size']),
                'height' => trim($_POST['height']),
                'width' => trim($_POST['width']),
                'length' => trim($_POST['length']),
                'weight' => trim($_POST['weight'])
            ];
            if ($this->productModel->addProduct($data)) {
                header("Location: " . URL_ROOT . "/products");
            } else {
                echo "Some thing went wrong!";
            }
        }
        $this->view('createProduct');
    }

    //Delete controller
    public function delete()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $product_ids = (!empty($_POST['product_ids'])) ? $_POST['product_ids'] : [];
            if ($this->productModel->deleteProducts($product_ids)) {
                header("Location: " . URL_ROOT . "/products");
            } else {
                die('Something went wrong!');
            }
        }
    }
}
