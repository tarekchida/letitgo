<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $UsersID
 * @property int $LanguagesID
 * @property string $Date
 * @property Language $language
 * @property User $user
 */
class WantedLanguages extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'WantedLanguages';

    /**
     * @var array
     */
    protected $fillable = ['Date'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function language()
    {
        return $this->belongsTo('App\Language', 'LanguagesID', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'UsersID', 'ID');
    }
}
