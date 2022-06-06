<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consent extends Model
{
    use HasFactory;


    protected $table = 'consent';


    protected $fillable = [
        'id',
        'pdpaform_id',
        'branch_id',
        'telephone',
        'ip',
        'browser',
        'device',
        'os',
        'details',
        'status',
    ];

}
