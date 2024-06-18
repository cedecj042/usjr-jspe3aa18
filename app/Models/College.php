<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
use App\Models\Department;
use App\Models\Program;

class College extends Model
{
    use HasFactory;
    protected $primaryKey='collid';
    public function student(){
        return $this->hasMany(Student::class,'studcollid','collid');
    }

    public function department(){
        return $this->hasMany(Department::class,'deptcollid','collid');
    }

    public function program(){
        return $this->hasMany(Program::class,'progcollid','collid');
    }

}
