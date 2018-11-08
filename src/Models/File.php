<?php

namespace Imedev2\Career\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['filename','jobReq_id'];


    public function jobReq()
    {
        return $this->belongsTo('Imedev2\Career\Models\Job','jobReq_id');
    }
}
