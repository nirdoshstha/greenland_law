<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menus';
    protected $fillable = ['title','slug','status','order'];

    public function submenus(){
        return $this->hasMany(Submenu::class, 'mainmenu_id','id')->where('status','0');
    }

}
