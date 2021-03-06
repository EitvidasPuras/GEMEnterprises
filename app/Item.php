<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    public $primaryKey = 'id';
    public $timestamps = true;

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function categoryName()
    {
        echo $this->category()->value('name');
    }
}
