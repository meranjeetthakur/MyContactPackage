<?php

namespace Ranjeet\MyContactPackage\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $gurarded = [];
    protected  $fillable = ['message', 'email', 'name'];
}
