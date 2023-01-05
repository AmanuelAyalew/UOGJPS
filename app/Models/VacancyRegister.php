<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DepartementName;

class VacancyRegister extends Model
{
    use HasFactory;

    protected $fillable = [
        "job_title",
        "vacancy_type",
        "departement_name",
        "currency",
        "date_posted",
        "sum_of_expertise",
        "deadline",
        "maximum_age",
        "location",
        "minimum_grade",
        "job_requirement",
        "year_of_graduation_starts_at"
    ];

    public function departement_name()
    {
        return $this->belongsTo(DepartementName::class);
    }
}
