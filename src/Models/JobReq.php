<?php

namespace Imedev2\Career\Models;

use Illuminate\Database\Eloquent\Model;

class JobReq extends Model
{
    protected $table = 'job_reqs';
    protected $fillable = [
        'job_id',
        'name',
        'message',
        'order',
        'review',
        'email'];


    public function job()
    {
        return $this->belongsTo('Imedev2\Career\Models\Job','job_id');
    }

    public function file()
    {
        return $this->hasOne('Imedev2\Career\Models\File');
    }
}
