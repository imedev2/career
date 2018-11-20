<?php

namespace Imedev2\Career\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'jobs';
    protected $fillable = ['company_id',
        'title',
        'arabic_title',
        'description',
        'arabic_description',
        'no_req',
        'order',
        'visible',
        'up_date'
    ];

    protected $appends = ['new_job_id'];



    public function getNewJobIdAttribute()
    {
        if ($this->company_id == 1)
        {
            return sprintf("FFK001-%03d", $this->id);
        }
        if ($this->company_id == 2)
        {
            return sprintf("IME002-%03d", $this->id);
        }
    }

    public function jobreqs()
    {
        return $this->hasMany('Imedev2\Career\Models\JobReq');
    }


    public function company()
    {
        return $this->belongsTo('Imedev2\Career\Models\Company','company_id');
    }

}
