<?php
namespace App\Libraries;

class subreddit {

    private $metadata;
    public $description;
    public $subreddit_name;

    public function __construct($subreddit_name) {
      $json_ = file_get_contents("https://www.reddit.com/r/" . $subreddit_name . "/about.json");
      $metadata = json_decode($json_)->data;
      $this->subreddit_name = $subreddit_name;
      $this->description = $metadata->description;

    }

    public function hot($limit=25) {
            $json_posts = file_get_contents("https://www.reddit.com/r/" . $this->subreddit_name . "/hot/.json?limit=" . $limit);

            $metadata = json_decode($json_posts);


             $post_array = array_map(function($post) {return new post($post); } , $metadata->data->children);
            return $post_array;
    }

}



class post {

  public $domain;
  public $url;
  public $title;

  public function __construct($post) {
    $this->domain = $post->data->domain;
    $this->url = $post->data->url;
    $this->title = $post->data->title;
  }


}



?>
