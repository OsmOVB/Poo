<?php

class Computador extends Produto
{
    private string $processador;
    private string $memoriaRam;
    private string $placadeVideo;

    public function __construct(
        string $processador,
        string $memoriaRam,
        string $placadeVideo
    ) {
       
        $this->processador = $processador;
        $this->memoriaRam = $memoriaRam;
        $this->placadeVideo = $placadeVideo;
    }

    public function getProcessador(): string
    {
        return $this->processador;
    }

    public function setProcessador(string $processador): self
    {
        $this->processador = $processador;
        return $this;
    }

    public function getMemoriaRam(): string
    {
        return $this->memoriaRam;
    }

    public function setMemoriaRam(string $memoriaRam): self
    {
        $this->memoriaRam = $memoriaRam;
        return $this;
    }

    public function getPlacadeVideo(): string
    {
        return $this->placadeVideo;
    }

    public function setPlacadeVideo(string $placadeVideo): self
    {
        $this->placadeVideo = $placadeVideo;
        return $this;
    }

    public function __toString(): string
    {
        return "Processador: " . $this->processador . " Memória Ram: " . $this->memoriaRam . " Placa de Vídeo: " . $this->placadeVideo;
    }
}
