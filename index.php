<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per gli animali. I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto). -->

<?php
    require_once(__DIR__.'./traits/traits.php');
    class User{
        protected $user_name;
        protected $user_surname;
        protected $user_email;

        function __construct($_name, $_surname, $_email)
        {
            $this->user_name = $_name;
            $this->user_surname = $_surname;
            $this->user_email = $_email;
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
    };

    class RegisteredUser extends User{
        public function getDiscount(){
            return 'sconoto utente registrato';
        }
    }
    class Product{
        protected $product_name;
        protected $product_code;
        protected $product_price;

        function __construct($_name, $_code, $_price)
        {
            $this->product_name;
            $this->product_code;
            $this->product_price;
        }

        public function getProductName(){
            return $this->product_name;
        }

        public function getProductCode(){
            return $this->product_code;
        }

        public function getProductPrice(){
            return $this->product_price;
        }
    }

    class Food extends Product{
        protected $food_type;

        function __construct($_name, $_code, $_price)
        {
            parent::__construct($_name, $_code, $_price);
            $this->food_type;
        }
    }

    // $paperino = new RegisteredUser('Paperino', 'Paperis', 'paperoamoroso99@gmail.com');
    // var_dump($paperino);
?>