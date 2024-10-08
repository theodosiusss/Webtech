
<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Videos</title>
</head>
<body>
<header>
    <h1>Tolle Videos</h1>
</header>
<main id="mainContainer">
    <?php include "./Video.php";
    $a = new YoutubeVideo("https://www.youtube.com/embed/vkIsEl-gdTA?si=o4PJD7NubqjZVMF3","life is a name");
    $b = new YoutubeVideo("https://www.youtube.com/embed/vkIsEl-gdTA?si=o4PJD7NubqjZVMF3","life is a name");
    $c = new YoutubeVideo("https://www.youtube.com/embed/vkIsEl-gdTA?si=o4PJD7NubqjZVMF3","life is a name");
    $d = new YoutubeVideo("https://www.youtube.com/embed/vkIsEl-gdTA?si=o4PJD7NubqjZVMF3","life is a name");
    $e = new YoutubeVideo("https://www.youtube.com/embed/vkIsEl-gdTA?si=o4PJD7NubqjZVMF3","life is a name");

    echo "<div class=\"divVideos\" >".$a->getHtmlcode().$b->getHtmlcode().$c->getHtmlcode().$d->getHtmlcode().$e->getHtmlcode()."</div>"

    ?>
    <?php
    $a = new VimeoVideo("https://player.vimeo.com/video/1006042481?h=3e440200f9","aiaiiai");
    $b = new VimeoVideo("https://player.vimeo.com/video/1006042481?h=3e440200f9","uiuiui");
    $c = new VimeoVideo("https://player.vimeo.com/video/1006042481?h=3e440200f9","wewewew is a name");
    $d = new VimeoVideo("https://player.vimeo.com/video/1006042481?h=3e440200f9","griaß euch");
    $e = new VimeoVideo("https://player.vimeo.com/video/1006042481?h=3e440200f9","hohohoh");

    echo "<div class=\"divVideos\" >".$a->getHtmlcode().$b->getHtmlcode().$c->getHtmlcode().$d->getHtmlcode().$e->getHtmlcode()."</div>"

    ?>
    <div class="divVideos">

        <iframe width="560" height="315" src="https://www.youtube.com/embed/zm-8Jxdj0Fk?si=9CQC5P28esM6spjP"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/zm-8Jxdj0Fk?si=9CQC5P28esM6spjP"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/zm-8Jxdj0Fk?si=9CQC5P28esM6spjP"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/zm-8Jxdj0Fk?si=9CQC5P28esM6spjP"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/zm-8Jxdj0Fk?si=9CQC5P28esM6spjP"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    <div class="divVideos">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/A6IBimNny6E?si=uyZBm_Jlk5eHsdip"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/A6IBimNny6E?si=uyZBm_Jlk5eHsdip"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/A6IBimNny6E?si=uyZBm_Jlk5eHsdip"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/A6IBimNny6E?si=uyZBm_Jlk5eHsdip"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/A6IBimNny6E?si=uyZBm_Jlk5eHsdip"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>

    <div class="divVideos">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/mnMt5AAL11M?si=sMK1mjzUX71HVLBS"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/mnMt5AAL11M?si=sMK1mjzUX71HVLBS"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/mnMt5AAL11M?si=sMK1mjzUX71HVLBS"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/mnMt5AAL11M?si=sMK1mjzUX71HVLBS"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/mnMt5AAL11M?si=sMK1mjzUX71HVLBS"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>

    <div class="divVideos">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Yd2ZDdyNOFU?si=tOyv54fu9Mb6oAzu"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Yd2ZDdyNOFU?si=tOyv54fu9Mb6oAzu"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Yd2ZDdyNOFU?si=tOyv54fu9Mb6oAzu"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Yd2ZDdyNOFU?si=tOyv54fu9Mb6oAzu"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/NBsxlHGxOB8?si=A21w6rMXLNejnkpF"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</main>

    <footer>Andi und Theo von Dumm und Dümmer solutions</footer>
</body>
</html>