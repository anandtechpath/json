<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpsallaryModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'EmployeesSallaryId';
    protected $table = 'employeessallary';
    protected $fillable = [
        'EmployeesId',
        'EmployeesSallaryMonthName',
        'EmployeesSallaryStipend'
    ];
}
