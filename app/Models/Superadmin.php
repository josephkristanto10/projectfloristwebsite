<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Superadmin
 * 
 * @property int $id
 * @property string $user
 * @property string $pass
 * @property string $name
 *
 * @package App\Models
 */
class Superadmin extends Model
{
	protected $table = 'superadmin';
	public $timestamps = false;

	protected $fillable = [
		'user',
		'pass',
		'name'
	];
}
