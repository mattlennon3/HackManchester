<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Charity extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Charity';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['Name', 'Description', 'Logo', 'Email', 'Phone', 'Website', 'CharityNo'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}