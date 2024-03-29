<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Challenge';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['TemplateID', 'BountyAmount', 'Paid', 'CharityID', 'ChallengeID','ChallengerID', 'Location', 'CreateDate'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];
}