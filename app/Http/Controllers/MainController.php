<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Company;
use App\Country;


class MainController extends Controller
{
    public function index()
    {
        $users = User::whereHas('companies.country', function ($query) {
            $query->where('countries.name', '=', 'Canada');
        })->with('companies')->get();

        return view('test', ['users' => $users]);
    }

    public function main()
    {
        return view('main', ['countries' => Country::all()]);
    }

    public function users()
    {
        $users = User::all();

        return view('users', ['users' => $users]);
    }

    public function companies()
    {
        $companies = Company::all();

        return view('companies', ['companies' => $companies]);
    }

    public function countries()
    {
        $countries = Country::with('companies')->get();

        return view('countries', ['countries' => $countries]);
    }

    public function userCountry(Request $request)
    {
        $users = User::whereHas('companies.country', function ($query) use ($request){
            $query->where('countries.id', '=', $request->country_id);
        })->with('companies')->get();

        return view('user_country', ['users' => $users, 'country_id' => $request->country_id]);
    }
}
