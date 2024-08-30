<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;

    protected $table = 'challenges';

    // Tentukan kolom yang dapat diisi secara massal
    protected $fillable = [
        'title',
        'description',
        'difficulty_level',
        'points',
        'created_at',
        'updated_at',
    ];

    /**
     * Relasi ke model UserChallenge.
     * Satu Challenge dapat dimiliki oleh banyak UserChallenges.
     */
    public function userChallenges()
    {
        return $this->hasMany(UserChallenge::class);
    }
}
