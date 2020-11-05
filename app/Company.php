<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name',
        'country_id'
    ];

    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'company_user', 'company_id', 'user_id')->withPivot('created_at');
    }
}
