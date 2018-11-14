<?php

namespace Imedev2\Career\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['name','email','message'];
}
