<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;

    protected $table = 'images';


    protected $fillable = [
        'id',
        'user_id',
        'posts_id',
        'images',
        'status',

    ];

    public function profileuser()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
