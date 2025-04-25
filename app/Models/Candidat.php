<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Candidat extends Model
{
    /** @use HasFactory<\Database\Factories\CandidatFactory> */
    use HasFactory;

    protected $guarded = [];

    public function etudiant(): HasOne
    {
        return $this->hasOne(Etudiant::class);
    }
}
