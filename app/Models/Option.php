<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;

    public $fillable=['option'];


    public function genres(){
        return $this->belongsToMany(Genre::class)->select(['id', 'genre'])->without('pivot');
    }
 
    public function question(){
        return $this->belongsTo(Question::class);
    }
}
