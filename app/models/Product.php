<?php 
    class Product{
        private $db;
        
        //Calling Database file each time when Product model is called 
        public function __construct(){
            $this->db = new Database;
        }

        //Get the list of products for DB 
        public function getProduct(){
            $this->db->query('SELECT * FROM products');

            $results = $this->db->resultSet();

            return $results;
        }

        public function addProduct($data){
            //Creating query to insert data to db
            $this->db->query('INSERT INTO products (SKU, name, price, size, height, width, length, weight) 
                                VALUES (:SKU, :name, :price, :size, :height, :width, :length, :weight)');
            //Binding data 
            $this->db->bind(':SKU', $data['SKU']);
            $this->db->bind(':name', $data['name']);
            $this->db->bind(':price', $data['price']);
            $this->db->bind(':size', $data['size']);
            $this->db->bind(':height', $data['height']);
            $this->db->bind(':width', $data['width']);
            $this->db->bind(':length', $data['length']);
            $this->db->bind(':weight', $data['weight']);

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
        }

        public function deleteProducts($product_ids){
        	$ids = implode(', ', $product_ids);
            $this->db->query("DELETE FROM products WHERE id IN ($ids)");

            if($this->db->execute()){
                return true;
            }else{
                return false;
            }
                
            }

            public function findPostById($id){
                $this->db->query('SELECT * FROM products WHERE id = :id');
                $this->db->bind(':id', $id);
                if($this->db->execute()){
                    return true;
                }else{
                    return false;
                }
            }
}
