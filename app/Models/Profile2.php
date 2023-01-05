<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile2 extends Model
{
    use HasFactory;
    protected $fillable = [
        'files',
        'file',
        'user_id'
    ];
}
