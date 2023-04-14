<?php

class FormaDeBolo
{
    public array $ingredientes = ["leite", "ovo", "farinha", "fermento", "açúcar", "manteiga", "chocolate"];
    public int %tempoDePreparo = 1;
    
    public function __construct()
    {
        echo "Forma de bolo criada";
    }
}