<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductVariant
 * 
 * @property int $id
 * @property int $id_product
 * @property int $stocks
 * @property int $prices
 * @property int $discounts
 * @property Carbon $updated_at
 * @property Carbon $created_at
 * @property string $name
 * @property string $descriptions
 * @property int $variant_status
 * @property string $images_variant
 * @property int $status_variant_delete
 *
 * @package App\Models
 */
class ProductVariant extends Model
{
	protected $table = 'product_variant';

	protected $casts = [
		'id_product' => 'int',
		'stocks' => 'int',
		'prices' => 'int',
		'discounts' => 'int',
		'variant_status' => 'int',
		'status_variant_delete' => 'int'
	];

	protected $fillable = [
		'id_product',
		'stocks',
		'prices',
		'discounts',
		'name',
		'descriptions',
		'variant_status',
		'images_variant',
		'status_variant_delete'
	];
}
