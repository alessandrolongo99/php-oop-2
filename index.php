<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per gli animali. I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto). -->

<?php
    class User{
        protected $user_name;
        protected $user_surname;
        protected $user_email;
        protected $user_credit_card;

        function __construct($_name, $_surname, $_email, $_credit_card)
        {
            $this->user_name = $_name;
            $this->user_surname = $_surname;
            $this->user_email = $_email;
            $this->user_credit_card = $_credit_card;
        }

        public function getUserName(){
            return $this->user_name;
        }

        public function getUserSurname(){
            return $this->user_surname;
        }

        public function getUserEmail(){
            return $this->user_email;
        }

        public function getUserCreditCard(){
            return $this->user_credit_card;
        }
    };

    // SUBCLASSES USER
    class RegisteredUser extends User{
        function __construct($_name, $_surname, $_email, $_credit_card)
        {
            parent::__construct($_name, $_surname, $_email, $_credit_card);
        }

        public function getDiscount($_price){
            return $_price * 0.8;
        }
    }

    // CLASS PRODUCT
    class Product{
        protected $product_brand;
        protected $product_code;
        protected $product_price;

        function __construct($_brand, $_code, $_price)
        {
            $this->product_brand = $_brand;
            $this->product_code = $_code;
            $this->product_price = $_price;
        }

        public function getProductBrand(){
            return $this->product_brand;
        }

        public function getProductCode(){
            return $this->product_code;
        }

        public function getProductPrice(){
            return $this->product_price;
        }
    }

    // SUBCLASSES PRODUCT

    class Food extends Product{
        protected $food_type;
        protected $food_animal;

        function __construct($_brand, $_code, $_price, $_type, $_animal)
        {
            parent::__construct($_brand, $_code, $_price);
            $this->food_type = $_type;
            $this->food_animal = $_animal;
        }
    }

    $paperino = new RegisteredUser('Paperino', 'Paperis', 'paperoamoroso99@gmail.com', 'qualcosa');
    var_dump($paperino);

    $crocchette_cane = new Food('Royal Canin', 1234, 40, 'dry', 'dog');
    var_dump($crocchette_cane);

    var_dump($paperino->getDiscount($crocchette_cane->getProductPrice()));
?>