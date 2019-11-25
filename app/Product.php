<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name', 'detail', 'price','image', 'description'];

    public function presentPrice(){
        return money_format('$%i', $this->price/100);
    }

}
