<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID
 * @property int $Name
 * @property UsedLanguage[] $usedLanguages
 * @property WantedLanguage[] $wantedLanguages
 */
class Languages extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Languages';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ID';

    /**
     * @var array
     */
    protected $fillable = ['Name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usedLanguages()
    {
        return $this->hasMany('App\UsedLanguages', 'LanguagesID', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wantedLanguages()
    {
        return $this->hasMany('App\WantedLanguages', 'LanguagesID', 'ID');
    }
}
