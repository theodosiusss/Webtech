<?php
namespace Theodorius\Ue6\Model\Entity;

use DateTime;
use Theodorius\Ue6\Model\Repository\GameRepository;

class Game
{


    private string $id;
    private Player $player1;
    private Player $player2;
    private DateTime $date;

    private string $winner;

    public function getWinner(): string
    {
        return $this->winner;
    }

    /**
     * @param string $id
     * @param Player $player1
     * @param Player $player2
     * @param DateTime $date
     */
    public function __construct(string $id, Player $player1, Player $player2, DateTime $date)
    {
        $this->id = $id;
        $this->player1 = $player1;
        $this->player2 = $player2;
        $this->date = $date;
        $this->winner = "";

        if($this->player1->getSymbol() == "Rock" && $this->player2->getSymbol() == "Rock" ){
            $this->winner = "draw";
        }
        if($this->player1->getSymbol() == "Rock" && $this->player2->getSymbol() == "Scissors" ){
            $this->winner = $player1->getName();
        }
        if($this->player1->getSymbol() == "Rock" && $this->player2->getSymbol() == "Paper" ){
            $this->winner = $player2->getName();
        }
        if($this->player1->getSymbol() == "Paper" && $this->player2->getSymbol() == "Paper" ){
            $this->winner = "draw";
        }
        if($this->player1->getSymbol() == "Paper" && $this->player2->getSymbol() == "Scissors" ){
            $this->winner = $player2->getName();
        }
        if($this->player1->getSymbol() == "Scissors" && $this->player2->getSymbol() == "Scissors" ){
            $this->winner = "draw";
        }
        if($this->player2->getSymbol() == "Rock" && $this->player1->getSymbol() == "Scissors" ){
            $this->winner = $player2->getName();
        }
        if($this->player2->getSymbol() == "Rock" && $this->player1->getSymbol() == "Paper" ){
            $this->winner = $player1->getName();
        }
        if($this->player2->getSymbol() == "Paper" && $this->player1->getSymbol() == "Scissors" ){
            $this->winner = $player1->getName();
        }

    }


    public function getDate(): string
    {
        return $this->date->format("Y-m-d H:i:s");
    }

    public function setDate(DateTime $date): void
    {
        $this->date = $date;
    }


    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getPlayer1(): Player
    {
        return $this->player1;
    }

    public function setPlayer1(Player $player1): void
    {
        $this->player1 = $player1;
    }

    public function getPlayer2(): Player
    {
        return $this->player2;
    }

    public function setPlayer2(Player $player2): void
    {
        $this->player2 = $player2;
    }








}