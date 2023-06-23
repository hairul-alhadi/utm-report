<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
        'name',
        'supervisor_name',
        'degree_name',
        'address',
        'dob',
        'matrices_no',
        'absctract'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
