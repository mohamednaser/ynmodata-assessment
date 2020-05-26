<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{

    protected $fillable = ['name', 'slug', 'description', 'release_date', 'country_code'];
}
