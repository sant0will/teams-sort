<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 18 May 2019 14:36:54 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class Team
 * 
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 *
 * @package App\Models
 */
class Team extends Eloquent
{
	protected $fillable = [
		'name'
	];
}
