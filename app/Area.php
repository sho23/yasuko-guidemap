<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Area extends Model
{
	use SoftDeletes;

	protected $table = 'areas';
    protected $softDelete = true;

    protected $dates = ['deleted_at'];
}
