<?php

// Sistema de Gerenciamento de Livraria com Estoque e Desconto

// Descrição: Neste exercício, você criará um sistema de gerenciamento de livraria usando PHP orientado a objetos. O objetivo é praticar os conceitos de classe, atributos, métodos, instâncias e encapsulamento.

// Passo 1: Crie a classe Livro

// Crie uma classe chamada Livro com os seguintes atributos privados:

// titulo
// autor
// editora
// preco
// desconto
// estoque
// Passo 2: Adicione os métodos de acesso

// Adicione métodos getter e setter para cada atributo.

// Passo 3: Adicione um método construtor

// Crie um método construtor __construct() que aceite os parâmetros. O método construtor deve atribuir os valores dos parâmetros aos atributos da classe.

// Passo 4: Adicione um método para calcular o preço com desconto

// Crie um método público chamado calcularPrecoComDesconto() que retorne o preço do livro com desconto aplicado.

// Passo 5: Adicione um método para exibir detalhes do livro

// Crie um método público chamado exibirDetalhes() que exiba informações sobre o livro, incluindo título, autor, editora, preço, desconto, preço com desconto e estoque.

// Passo 6: Crie instâncias da classe Livro

// Crie três instâncias da classe Livro e atribua valores diferentes para cada uma delas usando o método construtor.

// ("O Senhor dos Anéis", "J.R.R. Tolkien", "HarperCollins", 29.99, 10, 50);

// ("1984", "George Orwell", "Penguin Books", 15.99, 5, 30);

// ("Orgulho e Preconceito", "Jane Austen", "Vintage Classics", 12.99, 15, 20);

// Passo 7: Exiba os detalhes dos livros

// Use o método exibirDetalhes() para exibir informações sobre cada livro.

// Passo 8: Altere os atributos das instâncias de Livro

// // Altera o nome do livro 1
// ("Os Hobbits");
// // Altera o preco do livro 2
// ("16.99");
// // Altera a editora do livro 3
// (Penguin Books);
// Passo 9: Exiba os detalhes dos livros

// Passo 10: Utilize o método de desconto nas instâncias de Livro

// Altere o desconto do livro 1 para 20% e do livro 3 para 10%.

// Passo 11: Exiba os detalhes dos livros

// Ao concluir este exercício, você terá um sistema de gerenciamento de livraria.

class Livro {
    private $titulo;
    private $autor;
    private $editora;
    private $preco;
    private $desconto;
    private $estoque;

    public function __construct($titulo, $autor, $editora, $preco, $desconto, $estoque) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->editora = $editora;
        $this->preco = $preco;
        $this->desconto = $desconto;
        $this->estoque = $estoque;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getEditora() {
        return $this->editora;
    }

    public function setEditora($editora) {
        $this->editora = $editora;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function getDesconto() {
        return $this->desconto;
    }

    public function setDesconto($desconto) {
        $this->desconto = $desconto;
    }

    public function getEstoque() {
        return $this->estoque;
    }

    public function setEstoque($estoque) {
        $this->estoque = $estoque;
    }

    public function calcularPrecoComDesconto() {
        return $this->preco - ($this->preco * ($this->desconto / 100));
    }

    public function exibirDetalhes() {
        echo "Detalhes do livro:<br>";
        echo "Título: " . $this->titulo . "<br>";
        echo "Autor: " . $this->autor . "<br>";
        echo "Editora: " . $this->editora . "<br>";
        echo "Preço: " . $this->preco . "<br>";
        echo "Desconto: " . $this->desconto . "%<br>";
        echo "Preço com desconto: " . $this->calcularPrecoComDesconto() . "<br>";
        echo "Estoque: " . $this->estoque . "<br>";
        echo "<br>";
    }
}

$livro1 = new Livro("O Senhor dos Anéis", "J.R.R. Tolkien", "HarperCollins", 29.99, 10, 50);
$livro2 = new Livro("1984", "George Orwell", "Penguin Books", 15.99, 5, 30);
$livro3 = new Livro("Orgulho e Preconceito", "Jane Austen", "Vintage Classics", 12.99, 15, 20);

$livro1->exibirDetalhes();
$livro2->exibirDetalhes();
$livro3->exibirDetalhes();

$livro1->setTitulo("Os Hobbits");
$livro2->setPreco("16.99");
$livro3->setEditora("Penguin Books");

$livro1->exibirDetalhes();
$livro2->exibirDetalhes();
$livro3->exibirDetalhes();

$livro1->setDesconto(20);
$livro3->setDesconto(10);

$livro1->exibirDetalhes();
$livro3->exibirDetalhes();

?>