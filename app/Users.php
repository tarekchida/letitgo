<?php

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

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Users extends Model implements Authenticatable {

    use AuthenticableTrait;

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
    protected $fillable = ['FirstName', 'LastName', 'Email', 'UserName', 'Password', 'BirthDate', 'Avatar', 'CitiesID', 'CountriesID'];
    protected $hidden = [ 'Password', 'LastConnectionDate', 'CreationDate', 'apiKey', 'token'];

    /**
     *
     * @var type 
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city() {
        return $this->belongsTo('App\Cities', 'CitiesID', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country() {
        return $this->belongsTo('App\Countries', 'CountriesID', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bookmarks() {
        return $this->hasMany('App\Bookmarks', 'UsersID', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function disLikes() {
        return $this->hasMany('App\DisLikes', 'UsersID', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function likes() {
        return $this->hasMany('App\Likes', 'UsersID', 'ID');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages() {
        return $this->hasMany('App\Messages', 'UsersID', 'ID');
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
        return $this->hasMany('App\UsedLanguages', 'UsersID', 'ID');
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
        return $this->hasMany('App\WantedLanguages', 'UsersID', 'ID');
    }

}
