<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Visitor
 * 
 * @property int $id
 * @property string $nama
 * @property string $username
 * @property string $password
 * @property string $address
 * @property string $whatsapp_number
 *
 * @package App\Models
 */
class Visitor extends Model
{
	protected $table = 'visitor';
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'nama',
		'username',
		'password',
		'address',
		'whatsapp_number'
	];
}
