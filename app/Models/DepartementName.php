<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\VacancyRegister;

class DepartementName extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function vacancy_register()
    {
        return $this->hasMany(VacancyRegister::class);
    }
}
