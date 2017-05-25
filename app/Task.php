<?php

namespace App;



class Task extends Model
{
    public static function scopeIncomplete($query){
        return $query->where('completed',0);
    }
}
