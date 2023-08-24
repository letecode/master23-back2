<?php
    session_start();

    // variables
    $name = "Délicieux";
    $age = 18.0;
    $minuer = false;

    $fruits = ['banane', 'Orange', 'Mange'];
    $utilisateur = [
        "name" => "Joël",
        "ville" => "Kinshasa",
        "age" => 26,
        "single" => true 
    ];

    $utilisateurs = [
        [
            "name" => "Joël",
            "ville" => "Kolwezi",
            "age" => 26,
            "single" => true 
        ],
        [
            "name" => "Isaac",
            "ville" => "Lubumbashi",
            "age" => 24,
            "single" => false 
        ],
        [
            "name" => "Meda",
            "ville" => "Kinshasa",
            "age" => 22,
            "single" => true 
        ]
    ];

    
    if($age > 18 ) {
        echo "Je suis majeur";
    } else if($age < 18) {
        echo "je suis mineur";
    } else {
        echo "Je viens d'avoir mes 18";
    }

    // optional parameters
    function greeting($name, $messge = "Hello ") {
        return $messge . $name;
    }

    // boucle
    for($i = 1; $i <= 10;$i++) {
        echo "<p>". $i . "</p>";
    }

    for($i = 0; $i < count($fruits);$i++) {
        echo "<p>". $fruits[$i] . "</p>";
    }

    for($i=0;$i < count($utilisateurs);$i++) {
        echo "<h2>".$utilisateurs[$i]['name']. "</h2>";
        echo "<p>".$utilisateurs[$i]['ville']. "</p>";
    }

    foreach($utilisateurs as $utilisateur) {
        echo "<h2>".$utilisateur['name']. "</h2>";
        echo "<p>".$utilisateur['ville']. "</p>";
    }

    $_SESSION['user'] = $utilisateur;

    var_dump($_SESSION['user']);

?>