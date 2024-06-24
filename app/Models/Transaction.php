<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Transaction
 * 
 * @property int $id
 * @property int $id_user
 * @property int $total_price
 * @property int $total_qty
 * @property Carbon $updated_at
 * @property Carbon $created_at
 * @property int $transaction_status
 *
 * @package App\Models
 */
class Transaction extends Model
{
	protected $table = 'transaction';

	protected $casts = [
		'id_user' => 'int',
		'total_price' => 'int',
		'total_qty' => 'int',
		'transaction_status' => 'int'
	];

	protected $fillable = [
		'id_user',
		'total_price',
		'total_qty',
		'transaction_status'
	];
}
