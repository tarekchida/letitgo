<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $ID
 * @property string $FirstName
 * @property string $LastName
 * @property string $Email
 * @property string $UserName
 * @property string $Password
 * @property string $BirthDate
 * @property string $LastConnectionDate
 * @property string $CreationDate
 * @property string $Avatar
 * @property int $CitiesID
 * @property int $CountriesID
 * @property City $city
 * @property Country $country
 * @property Bookmark[] $bookmarks
 * @property DisLike[] $disLikes
 * @property Like[] $likes
 * @property Message[] $messages
 * @property Reporting[] $reportings
 * @property UsedLanguage[] $usedLanguages
 * @property Viewed[] $vieweds
 * @property WantedLanguage[] $wantedLanguages
 */
class Users extends Model {

    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Users';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'ID';

    /**
     * @var array
     */
    protected $fillable = ['FirstName', 'LastName', 'Email', 'UserName', 'Password', 'BirthDate', 'LastConnectionDate', 'CreationDate', 'Avatar', 'CitiesID', 'CountriesID'];

    /**
     *
     * @var type 
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city() {
        return $this->belongsTo('App\City', 'CitiesID', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country() {
        return $this->belongsTo('App\Country', 'CountriesID', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bookmarks() {
        return $this->hasMany('App\Bookmark', 'UsersID', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function disLikes() {
        return $this->hasMany('App\DisLike', 'UsersID', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function likes() {
        return $this->hasMany('App\Like', 'UsersID', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages() {
        return $this->hasMany('App\Message', 'UsersID', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reportings() {
        return $this->hasMany('App\Reporting', 'UsersID', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usedLanguages() {
        return $this->hasMany('App\UsedLanguage', 'UsersID', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vieweds() {
        return $this->hasMany('App\Viewed', 'UsersID', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function wantedLanguages() {
        return $this->hasMany('App\WantedLanguage', 'UsersID', 'ID');
    }

}
