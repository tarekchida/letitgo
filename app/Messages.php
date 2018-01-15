<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID
 * @property int $MessageTypeID
 * @property int $UsersID
 * @property string $ChainId
 * @property string $Date
 * @property MessageType $messageType
 * @property User $user
 * @property Bookmark[] $bookmarks
 * @property DisLike[] $disLikes
 * @property Like[] $likes
 * @property Reporting[] $reportings
 * @property Viewed[] $vieweds
 */
class Messages extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Messages';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ID';

    /**
     * @var array
     */
    protected $fillable = ['MessageTypeID', 'UsersID', 'ChainId', 'Date'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function messageType()
    {
        return $this->belongsTo('App\MessageType', 'MessageTypeID', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Users', 'UsersID', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bookmarks()
    {
        return $this->hasMany('App\Bookmarks', 'MessagesID', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function disLikes()
    {
        return $this->hasMany('App\DisLikes', 'MessagesID', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function likes()
    {
        return $this->hasMany('App\Likes', 'MessagesID', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reportings()
    {
        return $this->hasMany('App\Reporting', 'MessagesID', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vieweds()
    {
        return $this->hasMany('App\Viewed', 'MessagesID', 'ID');
    }
}
