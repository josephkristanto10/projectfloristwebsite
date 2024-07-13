<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * 
 * @property int $id
 * @property string $category_name
 * @property string $category_image
 * @property int $category_status
 * @property Carbon $updated_at
 * @property Carbon $created_at
 *
 * @package App\Models
 */
class Category extends Model
{
	protected $table = 'category';

	protected $casts = [
		'category_status' => 'int'
	];

	protected $fillable = [
		'category_name',
		'category_image',
		'category_status'
	];
}
