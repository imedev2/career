<?php

namespace Imedev2\Career\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    protected $fillable = ['name'];

    public function jobs()
    {
        return $this->hasMany('Imedev2\Career\Models\Job');
    }

}
