<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsSender extends Model
{
    public $timestamps = false;
    protected $table = 'news_sender';
    protected $fillable = [
        'email',
    ];
}
