<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model{
    protected $table = 'produtos';

    protected $hidden = [
        'created_at',
        'updated_at'
    ];


    protected $appends = [


    ];


}
