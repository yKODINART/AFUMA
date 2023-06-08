<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournees extends Model
{
    use HasFactory;

    protected $table = 'tournees';

    /**
    * The primary key for the model.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    protected $fillable = [
       'nom',
       'mois',
       'debut',
       'fin',
       'annee'
    ];

   
}
