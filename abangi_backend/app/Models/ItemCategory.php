<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'item_name',
        'item_image',
        'item_category_desc'
    ];
    public function getItem(){
        return $this->hasMany(Item::class);
    }
}
