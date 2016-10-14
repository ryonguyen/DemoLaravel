<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'tb_news';
    protected $dateFormat = 'Y-m-d H:i:s';
}
