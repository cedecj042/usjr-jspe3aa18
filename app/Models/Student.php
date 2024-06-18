<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\College;

class Student extends Model
{
    use HasFactory;

    // protected $fillable = ['studid','studfirstname','studlastname','studmidname','studprogid','studcollid','studyear'];
    protected $primaryKey = 'studid';
    
    public function college(){
        return $this->belongsTo(College::class);
    }

}
