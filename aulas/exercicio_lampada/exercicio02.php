<?php
    include_once 'Carro.class.php';

    $car1 = new Carro();
    $car2 = new Carro();
    $car3 = new Carro();
    $car4 = new Carro();
    $car5 = new Carro();


    //Carro 1;

    $car1->Marca = "Chevrolet";
    $car1->Modelo = "Onix";
    $car1->Combustivel =  "Gasolina";
    $car1->Portas = 4;
    $car1->Capacidade_tanque = 50;

    //Carro 2;

    $car2->Marca = "Volkswagen";
    $car2->Modelo = "Gol";
    $car2->Combustivel =  "Etanol";
    $car2->Portas = 4;
    $car2->Capacidade_tanque = 55;

    //Carro 3;

    $car3->Marca = "Honda";
    $car3->Modelo = "Civic";
    $car3->Combustivel =  "Gasolina";
    $car3->Portas = 4;
    $car3->Capacidade_tanque = 47;

    //Carro 4;

    $car4->Marca = "Toyota";
    $car4->Modelo = "Corolla";
    $car4->Combustivel =  "Gasolina";
    $car4->Portas = 4;
    $car4->Capacidade_tanque = 50;

    //Carro 5;

    $car5->Marca = "Ford";
    $car5->Modelo = "Fiesta";
    $car5->Combustivel =  "Etanol";
    $car5->Portas = 4;
    $car5->Capacidade_tanque = 47;

?>
