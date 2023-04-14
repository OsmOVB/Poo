<?php
class Estoque
{
    private static array $produtos = [];

    public static function adicionarAoEstoque(Produto $produto)
    {
        array_push(self::$produtos, $produto);
    }

    public static function getProdutos()
    {
        return self::$produtos;
    }

    public static function getEstoque(string $classe) {
        $soma = 0;
        foreach (self::$produtos as $produto) {
            if ($produto instanceof $classe) {
                $soma += $produto->getQuantidade();
            }
        }
        return $soma;
    }

}
