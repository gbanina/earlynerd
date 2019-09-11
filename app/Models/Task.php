<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    public function getDateAttribute() {
        return \Carbon\Carbon::parse($this->created_at)->format('M d, Y');
    }
}
