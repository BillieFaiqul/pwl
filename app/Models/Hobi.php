<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hobi extends Model
{
    use HasFactory;
    
    protected $table = 'hobis';
    // protected $primaryKey='id';
    //protected $keyType = 'int';
    protected $fillable = [
        'id',
        'Hobi'
    ];
}
