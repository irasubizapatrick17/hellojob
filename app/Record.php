<?php

namespace hellojob;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $table	=	'records';
    protected $fillable	=	['id', 'user_id','job_seeker_id','status'];
}

