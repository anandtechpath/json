<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpprojectModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'EmployeesProjectsId';
    protected $table = 'employeesprojects';
    protected $fillable = [
        'EmployeesId',
        'EmployeesProjectsName',
        'EmployeesProjectsDescription',
        'EmployeesProjectsLocation',
        'EmployeesProjectsDuration',
        'EmployeesProjectsBudget',
        'EmployeesProjectsIsCompleted'
    ];
}
