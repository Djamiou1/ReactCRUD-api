<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
                    'firstName',
                    'lastName',
                    'checkbox'
                    
          ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
