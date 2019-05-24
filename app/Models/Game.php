<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 18 May 2019 14:41:31 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Game
 * 
 * @property int $id
 * @property string $title
 * @property string $hour
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Game extends Eloquent
{
	protected $fillable = [
		'title',
		'hour'
	];
}
