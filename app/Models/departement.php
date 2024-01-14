<?php

namespace App\Models;

use App\Models\option;
use App\Models\section;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class departement extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;
    protected $fillable=['nom','descrip','section_id'];

    public function options(): HasMany
    {
        return $this->hasMany(option::class);
    }

    public function section(): BelongsTo
    {
        return $this->belongsTo(section::class);
    }

}
