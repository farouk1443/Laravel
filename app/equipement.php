<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class equipement extends Model
{
    protected $fillable =['designation','caracteristique','accessoire','alimentation','dimension','poid'];
}
