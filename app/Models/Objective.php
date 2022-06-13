<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objective extends Model
{
    use HasFactory;
    protected $table = 'ourobjectives';
    protected $fillable = ['title','description','icon','status'];
}
