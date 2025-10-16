<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class professor extends Model
{
    //

    protected $table ='professor';
    protected $fillable =['nome', 'disciplina']; //campos q serao preenchidos la no banco
}
