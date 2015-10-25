<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class ChallengedUser extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ChallengedUser';

    public $timestamps = false;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ChallengeID', 'UserID', 'ProofDescription', 'ProofLink', 'Status'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}