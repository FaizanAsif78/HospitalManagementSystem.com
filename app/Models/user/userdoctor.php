<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userdoctor extends Model
{
    protected $table = "doctor";
    protected $primaryKey = "doctor_id";
    

    use HasFactory;
}
