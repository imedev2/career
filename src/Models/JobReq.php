<?php

namespace Imedev2\Career\Models;

use Illuminate\Database\Eloquent\Model;

class JobReq extends Model
{
    protected $table = 'job_reqs';
    protected $fillable = ['job_id','name','message','filename'];


    public function job()
    {
        return $this->belongsTo('App/Job','job_id');
    }
}
