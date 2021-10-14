<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Limbah extends Model
{
    use HasFactory;
    public $table = 'test';
    public $fillable =['Out_Flowrate','In_Tabulizer','datetime','Out_Tabulizer','PH_out','Turbidity','NH3','In_Flowrate','any1','any2','any3'];
    public $timestamps = false;
    protected $dates = ['datetime'];
}
