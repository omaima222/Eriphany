<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;
   
    public $fillable=['genre'];
    
    public function options(){
        return $this->belongsToMany(Option::class);
    }

    public function recommendations(){
        return $this->HasMany(Recommendation::class);
    }
}
