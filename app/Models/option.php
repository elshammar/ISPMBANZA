<?php

namespace App\Models;

use App\Models\departement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class option extends Model
{
    use HasFactory;
    protected $fillable=['nom','departement_id','descrip'];
    
    public function departement(): BelongsTo
    {
        return $this->belongsTo(departement::class);
    }

}
