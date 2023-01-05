<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile4 extends Model
{
    use HasFactory;
    protected $fillable = [
        "job_title",
        "employer",
        "job_category",
        "start_date",
        "end_date",
        "experience_letter",
        "user_id"
    ];
}
