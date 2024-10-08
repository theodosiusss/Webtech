<?php

interface VideoInt
{
    public function getName();
    public function getSource();
    public function getHtmlcode();

}
abstract class VideoClass implements VideoInt {

    protected $name;
    protected $source;
    protected $htmlcode;


    function __construct($name , $source, $htmlcode) {
        $this->name = $name;
        $this->source = $source;
        $this->htmlcode = $htmlcode;

    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @return mixed
     */
    public function getHtmlcode()
    {
        return $this->htmlcode;
    }


}