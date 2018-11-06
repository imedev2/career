<?php

namespace Fatima\Career\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';
    protected $fillable = ['company_id','title','description'];


    public function jobreqs()
    {
        return $this->hasMany('App/JobReq');
    }


    public function company()
    {
        return $this->belongsTo('App/Company','company_id');
    }
}
