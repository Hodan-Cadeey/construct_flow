<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contractor extends Model
{
    //
    protected $fillable = [
    'contractor_code',
    'legal_name',
    'trade',
    'country',
];

}
