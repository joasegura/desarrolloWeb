<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    public $table = "users";
    public $guarded = [];
}
