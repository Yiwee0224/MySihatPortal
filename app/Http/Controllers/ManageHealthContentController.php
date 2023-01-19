<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;



class ManageHealthContentController extends BaseController
{

    public function healthContent()
    {

        $apikey = 'd60afe045547a121eeb9af88478adb5c';
        $url = "https://gnews.io/api/v4/search?q=health&token=$apikey&lang=en&country=us&max=10";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = json_decode(curl_exec($ch), true);
        curl_close($ch);
        $articles = $data['articles'];
        // $title = array(123, 456, 789, 012);
        // $desc = array("abc", "def", "ghi", "jkl");
        // $image = array("https://www.w3schools.com/images/w3schools_green.jpg", "https://www.w3schools.com/images/w3schools_green.jpg", "https://www.w3schools.com/images/w3schools_green.jpg", "https://www.w3schools.com/images/w3schools_green.jpg");
        $title = array($articles[0]["title"], $articles[1]["title"], $articles[2]["title"], $articles[4]["title"]);
        $desc = array($articles[0]["description"], $articles[1]["description"], $articles[2]["description"], $articles[4]["description"]);
        $url = array($articles[0]["url"], $articles[1]["url"], $articles[2]["url"], $articles[4]["url"]);
        $image = array($articles[0]["image"], $articles[1]["image"], $articles[2]["image"], $articles[4]["image"]);
        //  $obj = new object();
        // $obj = new Article();
        // $obj->title = $articles[0]["title"];

        // foreach ($articles as $article) {
        //     // you load an array here !!!

        //     $posts[] = new Article(
        //         $article->title,
        //         //    $article->excerpt,
        //         //    $article->date,
        //         //    $article->body()
        //     );
        // }

        // for ($i = 0; $i < count($articles); $i++) {
        //     // articles[i].title
        //     echo "Title: " . $articles[$i]['title'] . "\n";
        //     // articles[i].description
        //     echo "Description: " . $articles[$i]['description'] . "\n";
        //     // You can replace {property} below with any of the article properties returned by the API.
        //     // articles[i].{property}
        //     // echo $articles[$i]['{property}'] . "\n";

        //     // Delete this line to display all the articles returned by the request. Currently only the first article is displayed.
        //     break;
        // }
        // $artt = $articles[0];

        return view('ManageHealthContent.HealthContent', ['titles' => $title, 'descs' => $desc, 'urls' => $url, 'images' => $image]);
    }
}
class Article
{

    public String $title;
    public $description;
    public $image;
}
