<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $MessagesID
 * @property int $UsersID
 * @property string $Date
 * @property User $user
 * @property Message $message
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
    public function user()
    {
        return $this->belongsTo('App\User', 'UsersID', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function message()
    {
        return $this->belongsTo('App\Message', 'MessagesID', 'ID');
    }
}
