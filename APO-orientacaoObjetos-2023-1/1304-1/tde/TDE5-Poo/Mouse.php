<?php
class Mouse extends Produto
{
    private bool $ergonomico;
    private int $dpi;
    private static float $estoque = 0;

    public function setErgonomico(bool $ergonomico){
        $this->ergonomico = $ergonomico;
    }

    public function setDpi(int $dpi){
        $this->dpi = $dpi;
    }

    public function getErgonomico(): bool {
        return $this->ergonomico;
    }

    public function getDpi(): int {
        return $this->dpi;
    }

    public static function adicionarAoEstoque($qtd){
        self::$estoque = self::$estoque + $qtd;
    }

    public static function getEstoque(){
        return self::$estoque;
    }

}