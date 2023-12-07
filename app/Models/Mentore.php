<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mentore extends Model
{
    use HasFactory;
   

    protected $fillable =
    [
        'nom',
        'email',
        'numero_de_telephone',
        'statut',
        'password'
    ];

    public function mentor(): HasMany
    {
        return $this->hasMany(Mentor::class);
    }
}
