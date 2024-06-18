<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Program;
use App\Models\College;

class Department extends Model
{
    use HasFactory;
    protected $primaryKey='deptid';
    public function program(){
        return $this->hasMany(Program::class);
    }
    public function college(){
        return $this->belongsTo(College::class);
    }
}
