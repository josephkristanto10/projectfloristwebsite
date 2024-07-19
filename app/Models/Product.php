<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property int $id
 * @property string $names
 * @property string $descriptions
 * @property int $prices
 * @property int $discounts
 * @property int $stocks
 * @property string $images
 * @property int $has_variants
 * @property Carbon $updated_at
 * @property Carbon $created_at
 * @property int $product_status
 * @property int|null $product_category
 * @property int $status_product_delete
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'product';

	protected $casts = [
		'prices' => 'int',
		'discounts' => 'int',
		'stocks' => 'int',
		'has_variants' => 'int',
		'product_status' => 'int',
		'product_category' => 'int',
		'status_product_delete' => 'int'
	];

	protected $fillable = [
		'names',
		'descriptions',
		'prices',
		'discounts',
		'stocks',
		'images',
		'has_variants',
		'product_status',
		'product_category',
		'status_product_delete'
	];
}
