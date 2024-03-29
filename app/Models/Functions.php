<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Functions extends Model
{
    use HasFactory;

    public function scopeIsTrue(Builder $query , $field){
        return $query->where( $field, 1);
    }
}
