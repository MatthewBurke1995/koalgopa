<?php

namespace koreansite\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;




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






class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {

      $schedule->call(function () {
        $australia = new subreddit("australia");
        $posts = $australia->hot(25);

        foreach($posts as $post) {
        if (in_array($post->domain, ["abc.net.au", "theguardian.com", "theage.com.au", "smh.com.au"] )) {
          DB::table('headlines')->insert(
            ['headlineTitle' => $post->title, 'headlineURL' => $post->url, 'headlineDomain' => $post->domain]);
          }
            }
      })->daily();


    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
