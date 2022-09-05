<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per gli animali. I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto). -->

<?php
    class User{
        protected $name;
        protected $surname;
        protected $email;

        function __construct($_name, $_surname, $_email)
        {
            $this->name = $_name;
            $this->surname = $_surname;
            $this->email = $_email;
        }

        public function getName(){
            return $this->name;
        }

        public function getSurname(){
            return $this->surname;
        }

        public function getEmail(){
            return $this->email;
        }
    };

    $paperino = new User('Paperino', 'Paperis', 'paperoamoroso99@gmail.com');
    var_dump($paperino);
?>

