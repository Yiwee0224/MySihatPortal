<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cs extends Model
{
    use HasFactory;
    protected $primaryKey = 'csID';
    protected $table = 'cslist';
    public $timestamps = false;
}
