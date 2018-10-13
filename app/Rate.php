<?php

namespace App;


use App\User;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Rate extends Model
{
    protected $fillable = [
        'name',
    ];



    public $table = 'posts';


}