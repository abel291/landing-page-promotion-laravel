<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
	use HasFactory;
	protected $fillable = [
		'first_name',
		'last_name',
		'phone',
		'cedula',
		'email',
		'city_id',
	];

	public function city()
	{
		return $this->belongsTo(City::class);
	}
}
