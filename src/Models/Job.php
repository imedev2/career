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
        'visible'];


    public function jobreqs()
    {
        return $this->hasMany('Imedev2/Career/Models/JobReq');
    }


    public function company()
    {
        return $this->belongsTo('Imedev2/Career/Models/Company','company_id');
    }


    protected static function boot() {
        parent::boot();

        static::deleting(function($job) {
            $job->jobreqs()->delete();

        });
    }
}
