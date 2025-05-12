<?php

namespace Theodorius\Ue6\Model\Repository;

use DateTime;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Exception;
use Doctrine\DBAL\Tools\DsnParser;
use Theodorius\Ue6\Model\Entity\Game;
use Theodorius\Ue6\Model\Entity\Player;

class GameRepository
{
    private Connection $connection;

    public function __construct(string $connectionstring)
    {
        $dsnParser = new DsnParser();
        $connectionParams = $dsnParser
            ->parse($connectionstring);
        $this->connection = DriverManager::getConnection($connectionParams);
    }

    public function findAll(): array
    {
        $queryBuilder = $this->connection->createQueryBuilder();
        $queryBuilder
            ->select('id', 'player1', 'player2', 'date', 'player1pick', 'player2pick')
            ->from('Game');


        $format = 'Y-m-d H:i:s';
        $results = [];
        try {
            $results = $queryBuilder->executeQuery()->fetchAllAssociative();
        } catch (Exception $e) {
            echo $e;
        }

        $games = [];
        foreach ($results as $result) {
            $games[] = new Game($result['id'], new Player($result['player1'], $result['player1pick']), new Player($result['player2'], $result['player2pick']), DateTime::createFromFormat($format, $result['date']));
        }
        return $games;
    }

    public function add($player1, $player2, $player1pick, $player2pick,$date): string
    {
        try {
            $this->connection->insert("Game", [
                "player1" => $player1,
                "player2" => $player2,
                "player1pick" => $player1pick,
                "player2pick" => $player2pick,
                "date" => $date,

            ]);
        } catch (Exception $e) {

             return $e;
        }


        return "sucessfully created entry";

    }

    public function delete($id) : string
    {

        try {
            $this->connection->delete("Game",$id);
        } catch (Exception $e) {
            return $e;
        }

        return "successfully deleted entry";
    }
}