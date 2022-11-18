<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpRole extends Model
{
    use HasFactory;
    protected $primaryKey = 'EmployeesRoleId';
    protected $table = 'employeesrole';
    protected $fillable = [
        'EmployeesId',
        'EmployeesRoleName',
        'EmployeesRoleDescription'
    ];
}
