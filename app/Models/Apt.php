<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\User;

class Apt extends Model
{
    use HasFactory;

    protected $table = 'Appointment';
    public $timestamps = false;
    protected $guarded = [];

    public function doctor()
    {
        return $this->belongsTo(User::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
