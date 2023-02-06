<?php

namespace App;

use App\Traits\Slugger;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Slugger;

    public function Category() {
        return $this->belongsTo('App\Category');
    }
}
