<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    protected $fillable = [
    	'amount', 'status','user_id'
    ];



    //relaciones

    public function user()
    {
    	return $this->belongsTo('App\User');
    }


     public function appointment()
    {
    	return $this->hasOne('App\Appointment');
    }

    public function metas()
    {
    	return $this->hasMany('App\InvoiceMeta');
    }


    //alamcenamiento


    public function store($request)
    {
        $user = User::findOrFail(decrypt($request->user_id));
    		return self::create([
    			'amount' => 10,
    			'status' => 'pending',
    			'user_id' => $user->id
    		]);
    }

    public function my_update($request)
    {
        self::update($request->all());
    }

    public function meta($key, $default = null){
    	$value = $this->metas->where('key',$key)->first();

    	$value = (is_null($value)) ? $default : $value->value;
    	return $value;
    }

    public function concept()
    {
    	return $this->meta('concept', 'Sin especificar');
    }

    public function doctor($default = 'Sin especificar')
    {
    	$user_id = $this->meta('doctor', $default);
    	$user = User::findOrFail($user_id);
    	return $user;
    }

    public function status()
    {

    }

}
