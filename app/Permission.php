<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    
	protected $fillable = [
		'name','slug','description','role_id'

	];

//Relaciones

	public function role()
	{
		return $this->belongsTo('App\Role');

	}

	public function users()
	{
		return $this->belongsToMany('App\User')->withTimestamps();
	}

	public function store($request)
	{
		$slug = str_slug($request->name,'-');
		alert()->success('Exito', 'El permiso se guardo')->autoclose(3000);
		return self::create($request->all() + [
			'slug' => $slug,
		]);
	}

	public function my_update($request)
	{
			$slug = str_slug($request->name,'-');
			self::update($request->all()+ [
				'slug' => $slug,
			]);
			alert()->success('Exito', 'El permiso se ha actualizado')->autoclose(3000);
	}









}
