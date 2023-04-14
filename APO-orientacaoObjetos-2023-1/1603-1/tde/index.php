<?php

/*Crie uma nova instância da classe Pessoa chamada "Ana" e atribua valores aos seus atributos.

Crie um método dentro da classe Pessoa chamado "calcularIMC" que recebe o peso e a altura de uma pessoa e retorna o seu índice de massa corporal (IMC).

Crie uma nova instância da classe Pessoa chamada "Paulo" e atribua valores aos seus atributos. Em seguida, chame o método "calcularIMC" para calcular o seu IMC e exibir o resultado.

Crie um método dentro da classe Pessoa chamado "compararAltura" que recebe a altura de duas pessoas e retorna a diferença entre elas em centímetros.

Crie uma nova instância da classe Pessoa chamada "Julia" e atribua valores aos seus atributos. Em seguida, chame o método "compararAltura" para comparar a sua altura com a altura de outra pessoa e exibir o resultado.

Crie um método dentro da classe Pessoa chamado "dizerOla" que recebe o nome de uma pessoa e retorna uma saudação personalizada. Por exemplo, se o nome for "Maria", o método deve retornar "Olá, Maria!".

Crie uma nova instância da classe Pessoa chamada "Lucas" e atribua valores aos seus atributos. Em seguida, chame o método "dizerOla" para exibir uma saudação personalizada para Lucas.

Crie um método dentro da classe Pessoa chamado "fazerAniversario" que incrementa a idade da pessoa em 1.

Chame o método "fazerAniversario" na instância de pessoa "Ana" criada anteriormente e exiba a sua nova idade.

Crie um método dentro da classe Pessoa chamado "apresentar" que exibe uma mensagem de apresentação da pessoa, incluindo seu nome, idade, altura e peso. Por exemplo, "Oi, meu nome é Ana, tenho 25 anos, 1.65m de altura e peso 60kg".

Chame o método "apresentar" na instância de pessoa "Ana" criada anteriormente para exibir sua mensagem de apresentação.

*/

// echo phpinfo();
require_once 'pessoa.php';
$cpf = new Cpf('123456789', '12');
$pessoa = new Pessoa('Ana', 25, Sexo::Feminino, $cpf);

// echo 'Nome: ' . $pessoa->getNome();
// echo '<br>';
// // echo 'Idade: ' . $pessoa->getIdade();
// echo '<br>';
// echo 'Nome: ' . $pessoa->getNome() . '<br>'.'Idade: ' . $pessoa->getIdade() . ' <br>';

// echo 'Sexo: ' . ($pessoa->getSexo() === Sexo::Masculino ? 'Masculino' : 'Feminino');

// echo '<br>';

// // echo 'Cpf: ' . $cpf . ' <br>';s

// echo '<br>'. 'IMC: ' . $pessoa->calculaIMC(70.0, 1.80);

// echo '<br>'. 'Diferença de Altura: ' . $pessoa->compararAltura(1.70, 1.80) . ' Centimetros';


// // Criando instância da classe Pessoa
// $ana = new Pessoa("Ana", 30, Sexo::Feminino, new Cpf("123456789", "10"), 1.60, 60);

// // Chamando o método calcularIMC
// $imcAna = $ana->calculaIMC(60, 1.60);
// echo "O IMC de Ana é: " . $imcAna . "<br>";
$Paulo = new Pessoa("Paulo", 35, Sexo::Masculino, new Cpf("123456789", "00"));
$peso = 80;
$altura = 1.75;
$imc = $Paulo->calculaIMC($peso, $altura);
echo "O IMC de Paulo é: " . $imc;


