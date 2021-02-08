<?php

class BlogPost
{
    var $date;
    var $ts;
    var $link;

    var $title;
    var $text;
}

$feeds = array();
"https://www.01net.com/rss/smartphones/",
"https://www.01net.com/rss/tablettes/",
"https://www.01net.com/rss/pc-portables/",








    $posts = array();

    function __construct($file_or_url)
    {

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
            $post->summary = summarizeText($post->text);

            $posts[] = $post;
        }
    }



    function summarizeText($summary) {
        $summary = strip_tags($summary);

        // Truncate summary line to 100 characters
        $max_len = 100;
        if (strlen($summary) > $max_len) {
            $summary = substr($summary, 0, $max_len) . '...';
}
        return $summary;
    }
    


?>