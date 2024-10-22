<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Cart extends Model
{
    protected $guarded = false;

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}

	public function products(): BelongsToMany
	{
		return $this->belongsToMany(Product::class);
	}
}
