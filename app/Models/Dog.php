<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dog extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'breed_id',
        'age',
        'gender',
        'intakeDate',
        'bio',
        'imageURL'
    ];

    public function breed()
    {
        return $this->belongsTo(Breed::class); 
    }
}