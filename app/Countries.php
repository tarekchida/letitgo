<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID
 * @property int $Name
 * @property int $Code
 * @property City[] $cities
 * @property User[] $users
 */
class Countries extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Countries';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ID';

    /**
     * @var array
     */
    protected $fillable = ['Name', 'Code'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function states()
    {
        return $this->hasMany('App\States', 'CountriesID', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\Users', 'CountriesID', 'ID');
    }
}
