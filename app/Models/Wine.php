<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'price', 'category_id', 'image', 'status'
    ];

    public function category()
    {
        return $this->belongsTo(WineCategory::class, 'id');
    }

}
