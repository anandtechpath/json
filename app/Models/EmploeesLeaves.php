<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmploeesLeaves extends Model
{
    use HasFactory;
    protected $primaryKey = 'EmployeesLeavesId';
    protected $table = 'employeesleaves';
    protected $fillable = [
        'EmployeesId',
        'EmployeesLeavesDate',
        'EmployeesLeavesReason',
        'EmployeesLeavesAccept'
    ];
}
