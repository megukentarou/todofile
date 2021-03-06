<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{   
    protected $fillable = [
        'text', 'impression', 'action',
    ];
    /**
     * リレーション (従属)
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

