<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\College;
use App\Models\Department;
use App\Models\Student;

class Program extends Model
{
    use HasFactory;
    protected $primaryKey='progid';
    public function college(){
        return $this->belongsTo(College::class);
    }
    
    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function student(){
        return $this->hasMany(Student::class,'studprogid','progid');
    }
}
