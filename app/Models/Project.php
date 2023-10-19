<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ["name","config","origin","user_id","active"];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function registers() {
        return $this->hasMany(Register::class);
    }
}
