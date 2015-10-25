<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
<<<<<<< HEAD

=======
>>>>>>> c307d445e12dc68cc1da0bb6e9e8fbfc4654fdb3
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'User';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
<<<<<<< HEAD
    protected $fillable = ['Email', 'Password', 'CharityID', 'Location', 'Name', 'FB'];
=======
    protected $fillable = ['Email', 'Password','Name', 'CharityID', 'Location'];
>>>>>>> c307d445e12dc68cc1da0bb6e9e8fbfc4654fdb3

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password'];
<<<<<<< HEAD

=======
>>>>>>> c307d445e12dc68cc1da0bb6e9e8fbfc4654fdb3
}
