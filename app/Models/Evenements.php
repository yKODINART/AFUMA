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
       'tournee_id',
       'titre',
       'mois',
       'annee',
       'lieu',
       'pays',
       'date'
    ];

    public function tournees()
    {
        return $this->belongsTo(Tournees::class, 'tournee_id', 'id');
    }
}
