<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeesModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'employees';
    protected $fillable = [
        'EmployeesId',
        'EmployeesName',
        'EmployeesEmail',
        'EmployeesPhone',
        'EmployeesAddress',
        'EmployeesMartialStatus',
        'EmployeesDob'
    ];
}
