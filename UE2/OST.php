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

    public function __toString()
    {
        return "$this->ID . $this->name . $this->videoGame . $this->releaseYear";
    }


    public function jsonSerialize(): array
    {
        return array(
            "ID" => $this->ID,
            "Name" => $this->name,
            "VideoGame" => $this->videoGame,
            "ReleaseYear" => $this->releaseYear,
            "TrackList" => $this->trackList

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

    public function jsonSerialize(): array
    {
        return array (
            "Id" => $this->id,
            "Name" => $this->name,
            "Artist" => $this->artist,
            "TrackNumber" => $this->tracknumber,
            "Duration" => $this->duration
        );
    }
}
class Seeder{
    function run() : array
    {
        $a = new OST(1,"Vol 1","Final Fantasy X", 2002,array(new Song(1,"Zanarkand","Nobuo Uematsu",1,184000),new Song(2,"A Fleeting Dream","Nobuo Uematsu",2,262000),new Song(3,"Besaid","Nobuo Uematsu",3,282000),new Song(4,"Ending Theme","Nobuo Uematsu",4,328000)));
        $b = new OST(2,"WHAAAT","BABADA", 2024,array(new Song(1,"My World","Owiwi",1,180000),new Song(2,"Hero Of Mine","Owiwi",2,192000),new Song(3,"Life is a Game","Owiwi",3,200000),new Song(4,"4 Words","Owiwi",4,136000)));
        $c = new OST(3,"high","brain", 2020,array(new Song(1,"Ich werde Okay","Highbrain",1,1948010),new Song(2,"Riptide","Vance Joy",2,192000),new Song(3,"Schuaster Song","Enrico Tamponi",3,427000),new Song(4,"Sauerkautpolka","Gus Backus",4,126000)));
        return array($a,$b,$c);

    }


}



