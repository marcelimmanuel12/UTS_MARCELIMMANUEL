<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fakultas extends Model
{
    protected $table = 'Fakultas';
    protected $fillable = [
        'name_fakultas',
        'code_fakultas',
        'Dekan_fakultas',
    ];
}
