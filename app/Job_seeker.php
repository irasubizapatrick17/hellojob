<?php

namespace hellojob;

use Illuminate\Database\Eloquent\Model;

class Job_seeker extends Model
{
    protected $table	=	'job_seeker';
    protected $fillable	=	['id', 'user_id','first_name','last_name','profile','email','gender','dob','personal_status','telephone','nationality',
        'district','academic','subject','start_date','end_date','position','institution','personal_country','personal_location','duration','certificate'];
}

