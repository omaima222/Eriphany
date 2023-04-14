<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    
    public function option1()
    {
        return $this->hasMany(Option::class, 'id','option1_id');
    }

    public function option2()
    {
        return $this->hasMany(Option::class, 'id','option2_id');
    }

    public function option3()
    {
        return $this->hasMany(Option::class, 'id','option3_id');
    }

    public function option4()
    {
        return $this->hasMany(Option::class, 'id','option4_id');
    }

}
