<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table = 'abouts';
    protected $fillable = ['title','subtitle','image','description','slug','seo_title','seo_keyword','seo_desc','status'];
}
