<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    use HasFactory;
    protected $table ='headers';
    protected $fillable =['title','subtitle','image','logo','copyright','facebook','twitter','youtube','instagram','status'];
}
