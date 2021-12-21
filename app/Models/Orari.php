<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orari extends Model
{
    use HasFactory;

    protected $table = "orari";

    public static $ditet_e_javes = ["Hene", "Marte", "Merkure", "Enjte", "Premte"];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dita', 'fillon', 'mbaron'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}
