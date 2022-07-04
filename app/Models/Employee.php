<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }

    public function bills(){
        return $this->hasMany(Bill::class,'employee_id','id');
    }
}
