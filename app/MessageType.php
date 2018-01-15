<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID
 * @property int $TypeName
 * @property Message[] $messages
 */
class MessageType extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'MessageType';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ID';

    /**
     * @var array
     */
    protected $fillable = ['TypeName'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages()
    {
        return $this->hasMany('App\Messages', 'MessageTypeID', 'ID');
    }
}
