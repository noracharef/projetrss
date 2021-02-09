<?php

$feeds = [
" Smartphones" => "https://www.01net.com/rss/smartphones/",
" Tablettes" => "https://www.01net.com/rss/tablettes/",
" Pc-portables" => "https://www.01net.com/rss/pc-portables/",
" Pc-peripheriques" => "https://www.01net.com/rss/pc-peripheriques/", 
" Photo" => "https://www.01net.com/rss/photo/"
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


if(isset($_POST['submit'])){
    setcookie('theme', $_POST['theme'], time() - 1);
    setcookie('feed', $_POST['feed'], time() - 1);
    setcookie('nbArticle', $_POST['nbArticle'], time()+3600*24, "/");
  
}

