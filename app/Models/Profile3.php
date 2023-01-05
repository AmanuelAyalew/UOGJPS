<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile3 extends Model
{
    use HasFactory;

    protected $fillable = [
        'catagory',
        'qualification_type',
        'department',
        'qualification_title',
        'grade',
        'date_recived',
        'diploma',
        'transcript',
        'cost_sharing',
        'user_id'
    ];
}
