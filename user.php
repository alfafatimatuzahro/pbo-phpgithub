<?php

class User {
    public $firstname;
    public $lastname;
    public $phone;
    public $address;

    public function __construct($first, $last, $phone, $address) {
        $this->firstname = $first;
        $this->lastname = $last;
        $this->phone = $phone;
        $this->address = $address;
    }

    public function displayResult() {
        echo "<h3>Data User:</h3>";
        echo "Nama: " . $this->firstname . " " . $this->lastname . "<br>";
        echo "No HP: " . $this->phone . "<br>";
        echo "Alamat: " . $this->address . "<br>";
    }
}

?>
