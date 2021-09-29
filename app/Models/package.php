<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class package extends Model
{
    protected $fillable = ['packageClass'];

    public function packagePrice()
    {
        return $this->hasOne(packageprice::class, 'packageClass_id', 'id');
    }
}
