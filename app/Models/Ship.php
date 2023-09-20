<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ship extends Model {
	use HasFactory;

	protected $table = 'ships';

	protected $primaryKey = 'id';

	protected $fillable = [
		'title',
		'spec',
		'description',
		'ordering',
		'state',
	];

	public $timestamps = false;

	public function category() {
		return $this->hasOne(Category::class, 'ship_id','id');
	}

	public function photo() {
		return $this->hasOne(Photo::class, 'ship_id','id');
	}

}