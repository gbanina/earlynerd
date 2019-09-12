<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    public function getDateAttribute() {
        return \Carbon\Carbon::parse($this->created_at)->format('M d, Y');
    }

        public function project(){
          return $this->belongsTo('App\Models\Project')->first();
      }
}
