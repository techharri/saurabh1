<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class student extends Model
{
    use HasFactory; 
    protected $table="students";
    protected $primarykey="s_id";
    // protected $fillable = ['student', 'email', 'contact', 'msg'];
}
