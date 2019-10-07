<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profiles';
    protected $fillable = [
        'lastname', 'firstname', 'age', 'phone_number', 'address',
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
