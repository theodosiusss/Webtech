<?php

namespace Theodorius\UeFluid\Model\Entity;

use Error;

class Player
{

    private string $name;

    private string $symbol;


    /**
     * @param string $name
     * @param string $symbol
     */
    public function __construct(string $name, string $symbol)
    {
        if ($symbol != "Rock" && $symbol != "Scissors" && $symbol != "Paper") {
            throw new Error("Symbol must be Rock Paper or Scissors");
        }
        $this->name = $name;
        $this->symbol = $symbol;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getSymbol(): string
    {
        return $this->symbol;
    }

    public function setSymbol(string $symbol): void
    {
        $this->symbol = $symbol;
    }


}