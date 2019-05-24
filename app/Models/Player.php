<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 18 May 2019 14:41:18 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Player
 * 
 * @property int $id
 * @property string $name
 * @property string $overral
 * @property string $position
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Player extends Eloquent
{
	protected $fillable = [
		'name',
		'overral',
		'position'
	];
}
