<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    //product to Sale(1:many)
    public function sale(){
        return $this->hasMany(Sale::class);
    }
    //product to company
    public function company(){
        return $this->belongsTo(Company::class);
    }
}
