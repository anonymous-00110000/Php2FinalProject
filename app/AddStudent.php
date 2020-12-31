<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddStudent extends Model
{
    protected $fillable = [
        'Id_number', 'Lname', 'Fname', 'Middle', 'Birthday', 'email', 'address','Mnumber','gender','course',
    ];
}
