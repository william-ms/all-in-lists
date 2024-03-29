<?php

namespace app\controllers\site;

use app\apis\marvel\MarvelApi;
use app\library\controllers\Controller;
use app\library\sanitize\Sanitize;
use app\library\validate\Validate;

class HomeController extends Controller
{
  public function index(array $args)
  {
    $list = [];
    $main = ['media' => [], 'category' => ''];

    if(session_has('list'))
    {
      $list = session_get('list');
    }

    if(session_has('media'))
    {
      $main['media'] = session_get('media');
      $main['category'] = session_get('category');
    }

    return view('site.home', [
      'title' => 'Home',
      'list' => $list,
      'main' => $main
    ]);
  }

  public function store()
  {
    $validate = Validate::handle([
      'media' => 'REQUIRED',
      'category' => 'REQUIRED',
      'search' => 'REQUIRED'
    ]);

    if(!$validate->success())
    {
      redirect('/');
    }

    $sanitize = Sanitize::handle(['search', 'category']);

    $list = [];

    foreach($_POST['media'] as $media)
    {
      $main['media'][] = $media;

      if($media === 'comic')
      {
        $list['comics'] = match($sanitize->get('category'))
        {
          'marvel' => MarvelApi::get_comics($sanitize->get('search')),
        };
      }
    }

    session_set('media', $main['media']);
    session_set('category', $sanitize->get('category'));
    session_set('list', $list);

    redirect('/');
  }
}
