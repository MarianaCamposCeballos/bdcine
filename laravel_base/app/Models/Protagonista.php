<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Protagonista extends Model
{
    use HasFactory;
    protected $table="protagonistas";
    protected $primaryKey="id_protagonista";
    protected $fillable=["nom_p,ap_p,am_p"];
}
