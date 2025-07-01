<?php

namespace App\Models\articles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    use HasFactory;
    protected $table="article";
    protected $primaryKey="a_id";

    public function category()
    {
        return $this->belongsTo(Articlecat::class, 'ac_id', 'ac_id');
    }

    
}

