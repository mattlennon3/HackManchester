<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use SammyK\LaravelFacebookSdk\SyncableGraphNodeTrait;
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
    protected $fillable = ['Email', 'Password', 'CharityID', 'Location'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password'];

    protected static $graph_node_field_aliases = [
        'id' => 'FB',
    ];
}
