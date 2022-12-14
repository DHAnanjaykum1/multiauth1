<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Hash;
class Patient extends Authenticatable

{
    use HasFactory;
    protected $guarded = [];
    public function setPasswordAttribute($value){
        $this->attributes['password']= Hash::make($value);
    }
}
