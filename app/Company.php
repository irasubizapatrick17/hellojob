<?php

namespace hellojob;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table	=	'company';
    protected $fillable	=	['id', 'user_id','company_name','company_profile','email','telephone','location','company_bio','working_area'];
}
