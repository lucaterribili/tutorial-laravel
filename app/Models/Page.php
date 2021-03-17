<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = ['title', 'content'];
}
