<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //

    public function authors()
    {
        return $this->belongsToMany('App\Author');
    }

    public function genres()
    {
        return $this->belongsToMany('App\Genre');
    }

    public function users()
    {
        return $this->belongsToMany('App\User')->withPivot('date_loaned', 'date_return', 'date_returned');;
    }
}

