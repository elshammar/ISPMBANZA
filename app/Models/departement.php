<?php

namespace App\Models;

use App\Models\option;
use App\Models\section;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class departement extends Model
{
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
