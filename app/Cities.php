<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID
 * @property int $Name
 * @property int $CountriesID
 * @property int $Code
 * @property Country $country
 * @property User[] $users
 */
class Cities extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Cities';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ID';

    /**
     * @var array
     */
    protected $fillable = ['Name', 'CountriesID', 'Code'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo('App\Country', 'CountriesID', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\User', 'CitiesID', 'ID');
    }
}
