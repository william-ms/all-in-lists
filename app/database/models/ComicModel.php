<?php

namespace app\database\models;

use app\library\database\Model;

class ComicModel extends Model
{
  protected string $table = 'comics';
  protected string $entity = 'comic';
}
