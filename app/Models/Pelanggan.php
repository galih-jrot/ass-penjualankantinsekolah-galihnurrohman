<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', // assuming 'nama' is the customer's name column
        // add other relevant columns here
    ];
}
