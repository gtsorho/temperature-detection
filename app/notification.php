<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notification extends Model
{
    public $table = "notification";

    protected $fillable = ['temperature'];
}
