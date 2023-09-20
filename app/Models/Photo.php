<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model {
	use HasFactory;

	/**
	 * Table name
	 *
	 * @var string
	 */
	protected $table = 'ships_gallery';

	public $timestamps = false;

	/**
	 * Table primary key
	 *
	 * @var string
	 */
	protected $primaryKey = 'id';


	protected $fillable = [
		'title',
		'ordering',
		'url',
		'ship_id',
	
	];

	public function ship() {

	return $this->belongsTo(Ship::class);
	
	}

}
