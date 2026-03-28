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
    echo "<div class='result'>";
    echo "<h3>Data User:</h3>";
    echo "<p>Nama: $this->firstname $this->lastname</p>";
    echo "<p>No HP: $this->phone</p>";
    echo "<p>Alamat: $this->address</p>";
    echo "</div>";
}
}
