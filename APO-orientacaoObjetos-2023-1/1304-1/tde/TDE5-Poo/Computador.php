<?php
require_once('Produto.php');
class Computador extends Produto
{
    private string $processador;
    private string $memoriaRam;
    private string $placaDeVideo;
    private static float $estoque = 0;

    public function getProcessador(): string
    {
        return $this->processador;
    }

    public function getMemoriaRam(): string {
        return $this->memoriaRam;
    }

    public function getPlacaDeVideo(): string {
        return $this->placaDeVideo;
    }

    public static function adicionarAoEstoque($qtd){
        self::$estoque = self::$estoque + $qtd;
    }

    public static function getEstoque(){
        return self::$estoque;
    }

    public function setProcessador(string $processador): self
    {
        $this->processador = $processador;

        return $this;
    }

    public function setMemoriaRam(string $memoriaRam): self
    {
        $this->memoriaRam = $memoriaRam;

        return $this;
    }

    public function setPlacaDeVideo(string $placaDeVideo): self
    {
        $this->placaDeVideo = $placaDeVideo;

        return $this;
    }
}
