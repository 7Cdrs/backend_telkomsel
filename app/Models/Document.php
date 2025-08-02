<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
        'user_id',
        'type',
        'file_url',
        'uploaded_at',
    ];

    public $timestamps = false;

    protected $dates = ['uploaded_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
