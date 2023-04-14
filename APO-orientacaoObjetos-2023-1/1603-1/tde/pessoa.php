<?php
/*tipagem de sexo*/
enum Sexo {
    case Masculino;
    case Feminino;
}

class Cpf {
    private string $digitoVerificador;
    private string $numero;

    public function __construct( string $numero, string $digitoVerificador) {
        $this->digitoVerificador = $digitoVerificador;
        $this->numero = $numero;
        $this->validarNumero();
        $this->validarDigito();
    }

    private function validarNumero(){
       if( strlen($this->numero) != 9){
            throw new Exception('O número do CPF deve ter 9 dígitos');
       }   
    }

    private function validarDigito(){
        if( strlen($this->digitoVerificador) != 2){
            throw new Exception('O dígito invalido');
        }   
    }

    public function toString(): string {
        return $this->numero . $this->digitoVerificador;
    }

}

class Pessoa {
    private string $nome;
    private int $idade;
    private Sexo $sexo;
    private Cpf $cpf;


    public function __construct(string $nome, int $idade, Sexo $sexo,Cpf $cpf) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->cpf = $cpf;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getIdade(): int {
        return $this->idade;
    }

    public function getSexo(): Sexo {
        return $this->sexo;
    }

    public function getCpf($cpf): Cpf {
        return $this->cpf;
    }
    public function calculaIMC(float $peso, float $altura): float {
        return $peso/pow($altura, 2);
    }
    public function compararAltura(float $altura1,float $altura2): float {
        if($altura1 > $altura2){
            return ($altura1 - $altura2)*100;
        }else if($altura1 < $altura2){
            return ($altura2 - $altura1)*100;
        }else{
            return 0 ;
        }
    }
    public function dizerOla(string $nome): string {
        return 'Olá, ' . $nome . '!';
    }
    public function fazerAniversario(): int {
        return $this->idade++;
    }
    public function apresentar(): string {
        return 'Oi, meu nome é ' . $this->nome . ', tenho ' . $this->idade . ' anos, ' . $this->altura . ' m de altura e peso ' . $this->peso . 'kg';
    }

}


