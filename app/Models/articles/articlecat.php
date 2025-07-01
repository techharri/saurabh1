<?php

namespace App\Models\articles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class articlecat extends Model
{
    use HasFactory;

    protected $table="article_cat";
    protected $primaryKey="ac_id";

    public function parentCategory()
{
    return $this->belongsTo(articlecat::class, 'ap_cat', 'ac_id');
}
    public function category()
{
    return $this->belongsTo(articlecat::class, 'ap_cat', 'ac_id');
}

}