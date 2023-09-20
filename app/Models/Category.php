<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model {
	use HasFactory;

	/**
	 * Table name
	 *
	 * @var string
	 */
	protected $table = 'cabin_categories';

	public $timestamps = false;

	/**
	 * Table primary key
	 *
	 * @var string
	 */
	protected $primaryKey = 'id';

	protected $fillable = [
		'title',
		'description',
		'ordering',
		'photos',
		'state',
		'vendor_code',
		'ship_id',
	];

	public function ship() {

	return $this->belongsTo(Ship::class);

	}


}
