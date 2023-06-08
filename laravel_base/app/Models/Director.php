<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    use HasFactory;
    protected $table="directores";
    protected $primaryKey="id_director";
    protected $fillable=["nom_d,ap_d,am_d"];
}
