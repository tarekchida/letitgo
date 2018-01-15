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
class States extends Model {

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'States';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ID';

    /**
     * @var array
     */
    protected $fillable = ['Name', 'StatesID', 'Code'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cities() {
        return $this->hasMany('App\Cities', 'StatesID', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function countries() {
        return $this->belongsTo('App\Countries', 'CountriesID', 'ID');
    }

}
