<?php 

class Carta {
    private $nome;
    private $link;
    private int $num;

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
     * Get the value of link
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set the value of link
     */
    public function setLink($link): self
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get the value of num
     */
    public function getNum(): int
    {
        return $this->num;
    }

    /**
     * Set the value of num
     */
    public function setNum(int $num): self
    {
        $this->num = $num;

        return $this;
    }
}