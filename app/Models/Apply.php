<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\VacancyRegister;

class Apply extends Model
{
    use HasFactory;

    protected $fillable = [
        'Jobcode',
        'Jobexp',
        'Grade',
        'Age',
        'max_age',
        'user_id'

    ];
}
