<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Limbah2 extends Model
{
    use HasFactory;
    public $table = 'test2';
    public $fillable =['cod','ph','tss','ammonium'];
    public $timestamps = false;
    protected $dates = ['datetime'];
}
