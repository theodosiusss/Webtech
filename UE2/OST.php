<?php

class OST implements JsonSerializable{

    private int $ID;
    private string $name;
    private string $videoGame;
    private int $releaseYear;
    private array $trackList;

    /**
     * @param int $ID
     * @param string $name
     * @param string $videoGame
     * @param int $releaseYear
     * @param array $trackList
     */
    public function __construct(int $ID, string $name, string $videoGame, int $releaseYear, array $trackList)
    {
        $this->ID = $ID;
        $this->name = $name;
        $this->videoGame = $videoGame;
        $this->releaseYear = $releaseYear;
        $this->trackList = $trackList;
    }




    public function jsonSerialize()
    {
        return array(
            "ID" => $this->ID,
            "Name" => $this->name,
            "videoGame" => $this->videoGame,
            "releaseYear" => $this->releaseYear,
            "trackList" => $this->trackList

        );
    }
}
class Song implements JsonSerializable{
    private int $id;
    private String $name;
    private String $artist;
    private int $tracknumber;
    private int $duration;

    /**
     * @param int $id
     * @param String $name
     * @param String $artist
     * @param int $tracknumber
     * @param int $duration
     */
    public function __construct(int $id, string $name, string $artist, int $tracknumber, int $duration)
    {
        $this->id = $id;
        $this->name = $name;
        $this->artist = $artist;
        $this->tracknumber = $tracknumber;
        $this->duration = $duration;
    }

    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
    }
}
