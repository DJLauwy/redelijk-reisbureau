<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    protected $fillable = ['country', 'description', 'image', 'price', 'pub_date'];

    public function getPriceDisplay()
    {
        return '€ ' . $this->price;
    }
}

?>
