<?php namespace $NAME$\ActionLog\Models;

use Illuminate\Database\Eloquent\Model;
use $NAME$\User\Models\User;

/**
 * Class ActionLog
 * @package $NAME$\ActionLog\Models
 * @version December 26, 2016, 5:37 am UTC
 */
class ActionLog extends Model
{

    public $table = 'action_logs';

    const TYPE_LOGIN = 'login';
    const TYPE_LOGOUT = 'logout';
    const TYPE_SEARCH = 'search';
    const TYPE_DELETE = 'delete';
    const TYPE_UPDATE = 'update';
    const TYPE_CREATE = 'create';
    const TYPE_SHOW = 'show';

    public $fillable = [
        'type',
        'content',
        'ip',
        'user_agent',
        'created_by'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'content'    => 'string',
        'user_agent' => 'string',
        'created_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'content' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function user()
    {
        return $this->hasOne(User::class, 'created_by', 'id');
    }
}
