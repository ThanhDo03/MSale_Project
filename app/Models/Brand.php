<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table = 'brand';

    protected $primaryKey = 'id';

    public function products(){
        return $this->hasMany('App\Models\Product');
    }
    
    protected $fillable = [
        'name', 'description'
    ];
}
