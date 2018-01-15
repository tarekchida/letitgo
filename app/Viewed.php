<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $MessagesID
 * @property int $UsersID
 * @property string $Date
 * @property User $users
 * @property Message $messages
 */
class Viewed extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Viewed';

    /**
     * @var array
     */
    protected $fillable = ['Date'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users()
    {
        return $this->belongsTo('App\Users', 'UsersID', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function messages()
    {
        return $this->belongsTo('App\Messages', 'MessagesID', 'ID');
    }
}
