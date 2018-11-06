<?php

namespace Fatima\Career\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    protected $fillable = ['name'];

    public function jobs()
    {
        return $this->hasMany('App/Jobs');
    }

}
