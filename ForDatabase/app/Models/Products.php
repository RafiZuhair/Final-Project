<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'id', 'menu', 'desc'
    ];

    public function storedData($data){
        $results = Products::create($data);
        return $results;
    }
}
