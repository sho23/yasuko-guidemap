<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChildArea extends Model
{
	use SoftDeletes;

	protected $table = 'child_areas';
    protected $softDelete = true;

    protected $dates = ['deleted_at'];
}
