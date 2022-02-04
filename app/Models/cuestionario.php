<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuestionario extends Model
{
    protected $table = 'cuestionario';
    protected $primaryKey = 'id';
    use HasFactory;
}
