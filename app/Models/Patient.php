<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'brgy_id',
        'number',
        'email',
        'case_type',
        'coronavirus_status',
    ];

    public function brgy()
    {
        return $this->belongsTo(Brgy::class);
    }
}