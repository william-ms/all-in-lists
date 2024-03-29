<?php

namespace app\apis\marvel;

use app\database\entities\ComicEntity;

class MarvelApi 
{
  public static function get_comics(string $search): array
  {
    $search = str_replace(' ', '%20', $search);

    $curl = curl_init();

    $timestamp = strtotime(date('d-m-Y'));
    $apikey = $_ENV['MARVEL_PUBLIC_KEY'];
    $hash = md5($timestamp . $_ENV['MARVEL_PRIVATE_KEY'] . $apikey);

    $opt_url = "http://gateway.marvel.com/v1/public/comics?";
    $opt_url .= "format=comic&formatType=comic&";
    $opt_url .= "noVariants=true&";
    $opt_url .= "title={$search}&";
    $opt_url .= "ts={$timestamp}&apikey={$apikey}&hash={$hash}&";
    $opt_url .= "limit=6";

    curl_setopt_array($curl, [
      CURLOPT_URL => $opt_url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_CUSTOMREQUEST => 'GET'
    ]);

    $response = json_decode(curl_exec($curl));

    curl_close($curl);

    return self::extract_data($response->data->results);
  }

  private static function extract_data($results)
  {
    $data = [];

    foreach($results as $item)
    {
      $comic = new ComicEntity;

      $comic->title = $item->title;
      $comic->date = substr($item->dates[0]->date, 0, 10);
      $comic->thumbnail = $item->thumbnail->path.'.'.$item->thumbnail->extension;
      $comic->description = ($item->description) ? $item->description : '...';

      $data[] = $comic;
    }

    return $data;
  }
}
