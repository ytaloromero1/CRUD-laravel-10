<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    



       protected $table = 'notas';



    protected $fillable = [
        'titulo',
        'descripcion'
    ];







}
