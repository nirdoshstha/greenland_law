<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mydocument extends Model
{
    use HasFactory;
    protected $table = 'mydocuments';
    protected $fillable = ['user_id','company_name','dname','image','status'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
