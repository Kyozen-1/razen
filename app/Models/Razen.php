<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Razen extends Model
{
    protected $table = 'razens';
    protected $fillable = ['color_layout'];
    protected $guarded = 'id';

    public function user()
    {
        return $this->hasOne('App\User', 'razen_id');
    }
}
