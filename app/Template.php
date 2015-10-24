<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Template';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['Title', 'Description', 'CreatorID', 'Category'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}