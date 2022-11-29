<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserM extends Model
{
    use HasFactory;
    protected $fillable = ['Username', 'Email', 'Password'];

    public function getAuthPassword(){
        return $this->Password;
    }
}