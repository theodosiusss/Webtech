<?php



interface VideoInt
{
    public function getName();

    public function getSource();

    public function getHtmlcode();

}

abstract class VideoClass implements VideoInt
{

    protected $name;
    protected $source;
    protected $htmlcode;


    function __construct($name, $source)
    {
        $this->name = $name;
        $this->source = $source;

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
    public abstract function getHtmlcode();


}

class YoutubeVideo extends VideoClass
{


    public function __construct(string $source, string $name)
    {
        parent::__construct($name,$source);
    }


    public function getHtmlcode()
    {
        return "  
<figure><figcaption>$this->name from Youtube </figcaption><iframe width=\"560\" height=\"315\" src=$this->source title=$this->name
allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\"
referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe></figure> ";
    }
}

class VimeoVideo extends VideoClass
{

    private string $channelName;
    private string $username;




    public function __construct(string $source, string $name)
    {
        parent::__construct($name,$source);

    }


    public function getHtmlcode()
    {
        return <<<HTML
<figure> <figcaption>$this->name from Vimeo</figcaption><iframe src=$this->source width="640" height="480"  allow="autoplay; fullscreen; picture-in-picture" allowfullscreen title=" $this->name"></iframe>
</figure>
HTML;

    }
}
