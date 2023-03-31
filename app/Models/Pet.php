<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = ['name','owner_id', 'species', 'breed','age','weight'];

    public function petOwner()
    {
        return $this->belongsTo(PetOwner::class);
    }
}
