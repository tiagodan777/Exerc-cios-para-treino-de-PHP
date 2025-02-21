<?php
include 'JogadorException.php';

class Jogador {
    private $nome, $idade, $xp;

    function __construct($nome, $idade, $xp)
    {
        if ($nome == '') {
            throw new JogadorException('Nome não foi colocado', 1);
        } else {
            $this->nome = $nome;
        }
        if ($idade < 0) {
            throw new JogadorException('Idade inválida', 2);
        } else {
            $this->idade = $idade;
        }
        if ($xp < 0) {
            throw new JogadorException('XP inválido', 3);
        } else {
            $this->xp = $xp;
        }
    }

    public function jogar() {
        if ($this->idade < 10) {
            throw new JogadorException('Jogador demasiado novo para puder jogar', 4);
        } else {
            echo "A começar a jogar!";
        }
    }

    public function apresentar() {
        echo $this->nome . " tem " . $this->idade . " anos e pussui " . $this->xp . "XP";
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }

    /**
     * Get the value of xp
     */
    public function getXp()
    {
        return $this->xp;
    }

    /**
     * Set the value of xp
     */
    public function setXp($xp): self
    {
        $this->xp = $xp;

        return $this;
    }
}