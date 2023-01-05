<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile1 extends Model
{
    use HasFactory;

    protected $fillable = [
        "Email",
        "Mobile_Number",
        "First_Name",
        "FatherName",
        "last_name",
        "BirthDate",
        "Marital_Status",
        "Gender",
        "Title",
        "Country",
        "region",
        "Zone",
        "Wereda",
        "Kebele",
        "House_Number",
        "Phone",
        "fax",
        "user_id"
    ];
}
