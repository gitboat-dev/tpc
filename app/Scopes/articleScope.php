<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class articleScope implements Scope {
	public function apply(Builder $builder, Model $model) {
		$datenow = date('Y-m-d H:i:s');
		$builder->where('active', 1)
			->where('article_date_start', '<=', $datenow);
	}
}