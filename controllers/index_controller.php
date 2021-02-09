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
            $post = new BlogPost();
            $post->date  = (string) $item->pubDate;
            $post->ts    = strtotime($item->pubDate);
            $post->link  = (string) $item->link;
            $post->title = (string) $item->title;
            $post->text  = (string) $item->description;

            // Create summary as a shortened body and remove images, 
            // extraneous line breaks, etc.
            $post->summary = $this->summarizeText($post->text);

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

    private function summarizeText($summary) {
        $summary = strip_tags($summary);

        // Truncate summary line to 100 characters
        $max_len = 100;
        if (strlen($summary) > $max_len)
        {
            $summary = substr($summary, 0, $max_len) . '...';
        }
        return $summary;
    }
}

function returnFeeds($feeds)
{
}

if(isset($_COOKIE['submit'])){
    setcookie('theme', $_POST['theme'], time() - 1);
    setcookie('flux', $_POST['flux'], time() - 1);
    setcookie('nbcards', $_POST['nbcards'], time() - 1);
  
}

