<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeesDptModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'EmployeesDepartmentId';
    protected $table = 'employeesdepartment';
    protected $fillable = [
        'EmployeesId',
        'EmployeesDepartmentName',
        'EmployeesDepartmentDescription'
    ];
}
