<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cine extends Model
{
    use HasFactory;
    protected $table="cines";
    protected $primaryKey="id_cine";
    protected $fillable=["calle,numero,telefono"];
}
