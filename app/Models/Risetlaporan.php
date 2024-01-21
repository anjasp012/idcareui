<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Risetlaporan extends Model
{
    use HasFactory;

    protected $table = 'laporan';

    protected $guarded = ['id'];
}
