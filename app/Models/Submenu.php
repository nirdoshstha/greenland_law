<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    use HasFactory;
    protected $table = 'submenus';
    protected $fillable = ['title','mainmenu_id','slug','status'];

    public function menus(){
        return $this->belongsTo(Menu::class);
    }
}
