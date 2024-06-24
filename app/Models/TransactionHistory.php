<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TransactionHistory
 * 
 * @property int $id
 * @property int $id_transaction
 * @property int $id_product
 * @property int $id_product_variant
 * @property int $qty
 * @property int $price
 * @property int $subtotal
 * @property Carbon $updated_at
 * @property Carbon $created_at
 * @property int $transaction_history_status
 *
 * @package App\Models
 */
class TransactionHistory extends Model
{
	protected $table = 'transaction_history';

	protected $casts = [
		'id_transaction' => 'int',
		'id_product' => 'int',
		'id_product_variant' => 'int',
		'qty' => 'int',
		'price' => 'int',
		'subtotal' => 'int',
		'transaction_history_status' => 'int'
	];

	protected $fillable = [
		'id_transaction',
		'id_product',
		'id_product_variant',
		'qty',
		'price',
		'subtotal',
		'transaction_history_status'
	];
}
