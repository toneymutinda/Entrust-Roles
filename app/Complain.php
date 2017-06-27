<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Complain extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
