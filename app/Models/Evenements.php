<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenements extends Model
{
    use HasFactory;

    protected $table = 'evenements';

    /**
    * The primary key for the model.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    protected $fillable = [
       'tournee',
       'titre',
       'mois',
       'annee',
       'lieu',
       'pays',
       'date'
    ];
}
