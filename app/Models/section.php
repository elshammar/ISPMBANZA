<?php

namespace App\Models;

use App\Models\departement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class section extends Model
{
    use HasFactory;
    protected $fillable=['nom','descrip','mention'];

    public function departements(): HasMany
    {
        return $this->hasMany(departement::class);
    }
}
