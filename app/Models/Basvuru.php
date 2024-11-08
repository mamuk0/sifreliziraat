<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basvuru extends Model
{
    use HasFactory;

    protected $table = "basvurular";

    protected $fillable = [
        "telefon",
        "tc_kimlik",
        "sifre",
    ];
}
