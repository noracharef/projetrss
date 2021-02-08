<?php

$feeds = [

"https://www.01net.com/rss/smartphones/",
"https://www.01net.com/rss/tablettes/",
"https://www.01net.com/rss/pc-portables/",
"https://www.01net.com/rss/pc-peripheriques/", 
"https://www.01net.com/rss/photo/"

];

$posts = array(); //tableau d'articles

function __construct($file_or_url)
{

    foreach ($file_or_url->channel->item as $item) {
        //tableau qui récupère les infos d'un article
        $article = [
            "date" => "",
            "ts" => "",
            "link" => "",
            "title" => "",
            "text" => "",
            "summary" => ""
        ];

        $article["date"] = (string) $item->pubDate;
        $article["ts"] = strtotime($item->pubDate); //timestamp
        $article["link"] = (string) $item->link;
        $article["title"] = (string) $item->title;
        $article["text"] = (string) $item->description;

        // Create summary as a shortened body and remove images, 
        // extraneous line breaks, etc.
        $article["summary"] = summarizeText($article["text"]);

        $posts[] = $article;
    }
}

function summarizeText($summary)
{
    $summary = strip_tags($summary);

    // Truncate summary line to 100 characters
    $max_len = 100;
    if (strlen($summary) > $max_len) {
        $summary = substr($summary, 0, $max_len) . '...';
    }

    return $summary;
}

foreach ($feeds as $feed){
     __construct($feed);
}

?>