<?php

/**
 * throwIt
 * ThrowIt Api
 *
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Countries;
use App\States;
use Auth;

class ApiLocationController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Operation countriesGet
     *
     * Get countries list.
     *
     *
     * @return Http response
     */
    public function countriesGet() {

        $countries = Countries::all();

        return response()->json($countries);
    }

    /**
     * Operation countriesIdGet
     *
     * Get states list by country id.
     *
     * @param int $id Country id (required)
     *
     * @return Http response
     */
    public function countriesIdGet($id) {

        $statesByCountryId = new \stdClass();
        $country = Countries::find($id);
        if (!empty($country)) {
            $states = $country->states;
            $statesByCountryId->ID = $country->ID;
            $statesByCountryId->Name = $country->Name;
            $statesByCountryId->Code = $country->Code;
            $statesByCountryId->states = $states;
            return response()->json($statesByCountryId);
        }


        return response('Country not found', API_NOT_FOUND);
    }

    /**
     * Operation statesIdGet
     *
     * Get cities list by state id.
     *
     * @param int $id Country id (required)
     *
     * @return Http response
     */
    public function statesIdGet($id) {
        $citiesByStateId = new \stdClass();
        $state = States::find($id);
        if (!empty($state)) {
            $cities = $state->cities;
            $citiesByStateId->ID = $state->ID;
            $citiesByStateId->Name = $state->Name;
            $citiesByStateId->cities = $cities;
            return response()->json($citiesByStateId);
        }

        return response('State not found', API_NOT_FOUND);
    }

}
