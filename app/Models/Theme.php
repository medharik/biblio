<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Theme extends Model
{
    use HasFactory;
    protected $fillable=['theme','niveau','photo'];
/**
 * Get all of the documents for the Theme
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function documents(): HasMany
{
    return $this->hasMany(Document::class, 'theme_id');
}
}
//$t=Theme::find(1)

//$t->documents->count()

