<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'user_id'];

    protected $table = 'products';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
