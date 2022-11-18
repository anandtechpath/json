<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpPerformance extends Model
{
    use HasFactory;
    protected $primaryKey = 'EmployeesPerformanceId';
    protected $table = 'employeesperformance';
    protected $fillable = [
        'EmployeesId',
        'EmployeesPerformanceScore',
        'EmployeesPerformanceAccuracyScore'
    ];
}
