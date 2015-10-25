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

    public $timestamps = false;

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

    public function scopeGetChallengesByCat($query, $cat){
        return $query->where('Template.Category', '=', $cat);
    }
}