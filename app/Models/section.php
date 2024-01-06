<?php

namespace App\Models;

use App\Models\departement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class section extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;
    protected $fillable=['nom','descrip','mention'];

    public function departements(): HasMany
    {
        return $this->hasMany(departement::class);
    }
}
