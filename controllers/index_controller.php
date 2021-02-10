<?php

$feeds = [
"Smartphones" => "https://www.01net.com/rss/smartphones/",
"Tablettes" => "https://www.01net.com/rss/tablettes/",
"Pc-portables" => "https://www.01net.com/rss/pc-portables/",
"Pc-peripheriques" => "https://www.01net.com/rss/pc-peripheriques/", 
"Photo" => "https://www.01net.com/rss/photo/"
];

class BlogPost
{
    var $date;
    var $ts;
    var $link;
    var $title;
    var $text;
    var $enclosure;
}

class BlogFeed
{
    var $posts = array();
    function __construct($file_or_url)
    {
        $file_or_url = $this->resolveFile($file_or_url);
        if (!($x = simplexml_load_file($file_or_url)))
        {
            return;
        }

        foreach ($x->channel->item as $item)
        {
            setlocale(LC_TIME, "fr_FR.utf8", "fra"); //Régler l'accent sur les mois
            $post = new BlogPost();            
            $post->date  = (string) strftime("%a %e %B %G", strtotime($item->pubDate));
            $post->ts    = strtotime($item->pubDate);
            $post->link  = (string) $item->link;
            $post->title = (string) $item->title;
            $post->text  = (string) $item->description;
            $post->enclosure = (string) $item->enclosure["url"];

            // Create summary as a shortened body and remove images, 
            // extraneous line breaks, etc.
            
            $post->summary = (string) strip_tags($item->description);
            $this->posts[] = $post;
        }
    }

    private function resolveFile($file_or_url) {
        if (!preg_match('|^https?:|', $file_or_url))
            {
                $feed_uri = $_SERVER['DOCUMENT_ROOT'] .'/shared/xml/'. $file_or_url;
            }
        else
            {
                $feed_uri = $file_or_url;
            }

        return $feed_uri;
    }

}

function changeIconColor($feed, $feeds)
{
    switch($feed)
    {
        case $feed==$feeds["Smartphones"]: echo "#18E0E5";break;
        case $feed==$feeds["Tablettes"]: echo "#22E518";break;
        case $feed==$feeds["Pc-portables"]: echo "#F2F208";break;
        case $feed==$feeds["Pc-peripheriques"]: echo "#F91902";break;
        case $feed==$feeds["Photo"]: echo "#C102F9";break;
    }
}

$testCookie = false;
if(isset($_COOKIE["theme"]) && isset($_COOKIE["feed"]) && isset($_COOKIE["nbArticle"]))
{
    if(!empty($_POST["theme"]) && !empty($_POST["feed"]) && !empty($_POST["nbArticle"]) && 
    ($_POST["theme"] != $_COOKIE["theme"] || $_POST["feed"] != $_COOKIE["feed"] || $_POST["nbArticle"] != $_COOKIE["nbArticle"]))
    {
        setcookie('theme', $_POST['theme'], time()+3600*24, "/");
        setcookie('feed', $_POST['feed'], time()+3600*24, "/");
        setcookie('nbArticle', $_POST['nbArticle'], time()+3600*24, "/");
        header("Location: index.php");
        exit();            
    }
    else
    {
        $testCookie = true;
    }
    
}
else
{
    if(!empty($_POST["theme"]) && !empty($_POST["feed"]) && !empty($_POST["nbArticle"]))
    {
        setcookie('theme', $_POST['theme'], time()+3600*24, "/");
        setcookie('feed', $_POST['feed'], time()+3600*24, "/");
        setcookie('nbArticle', $_POST['nbArticle'], time()+3600*24, "/");
        header("Location: index.php");
        exit();
    }
}


?>