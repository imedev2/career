<?php

namespace Imedev2\Career\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';
    protected $fillable = ['company_id','title','description'];


    public function jobreqs()
    {
        return $this->hasMany('Imedev2/Career/Models/JobReq');
    }


    public function company()
    {
        return $this->belongsTo('Imedev2/Career/Models/Company','company_id');
    }
}
