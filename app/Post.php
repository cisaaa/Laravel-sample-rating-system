<?php

namespace App;
use App\User;
use App\Rate;


use Illuminate\Database\Eloquent\Model;

use willvincent\Rateable\Rateable;
// use willvincent\Rateable\Rating;


class Post extends Model

{

    use Rateable;


   // public function userAverageRating()
   //  {
   //      return $this->ratings()->where('user_id', \Auth::id())->avg('rating');
        
   //  }

    // public function getUserAverageRatingAttribute()
    // {
    //     return $this->userAverageRating();
    // }


}










