<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $primaryKey = 'cusID';
    protected $table = 'Customer';
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
