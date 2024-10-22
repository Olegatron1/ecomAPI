<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PaymentMethod extends Model
{
	protected $guarded = false;

	public function orders(): HasMany
	{
		return $this->hasMany(Order::class);
	}
}