<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genero extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table="generos";
    protected $primaryKey="id_genero";
    protected $fillable=["desc_genero"];
}
