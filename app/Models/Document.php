<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    // protected $table = 'd';
    protected $fillable =['titre','description','chemin','theme_id'];
}
