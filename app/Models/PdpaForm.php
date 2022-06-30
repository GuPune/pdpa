<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PdpaForm extends Model
{
    use HasFactory;

    protected $table = 'pdpaform';


    protected $fillable = [
        'id',
        'code_form',
        'name',
        'note',
        'des',
        'branch_id',
        'linenoti',
        'qrcode',
        'agree',
        'token',
        'status',
        'typeform',
        'bt_name',
        'bt_color',
        'des2'
    ];

    public function branchform()
    {
        return $this->hasOne(Branch::class,'id','branch_id');
    }

}
