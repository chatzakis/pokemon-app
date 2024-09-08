<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $fillable = ['id', 'name', 'image','species', 'height', 'weight', 'hp', 'attack', 'defense', 'special_attack', 'special_defense', 'speed', 'favorite'];
}
