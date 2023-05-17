<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Document extends Model
{
    use HasFactory;

    // protected $table = 'd';
    protected $fillable =['titre','description','chemin','theme_id'];
/**
 * Get the theme that owns the Document
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function theme(): BelongsTo
{
    return $this->belongsTo(Theme::class);
}
}
// $d=Document::find(1);
// $d->theme->photo;
