<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserChallenge extends Model
{
    use HasFactory;

    protected $table = 'user_challenges';

    // Tentukan kolom yang dapat diisi secara massal
    protected $fillable = [
        'user_id',
        'challenge_id',
        'status',
        'completed_at',
        'created_at',
        'updated_at',
    ];

    /**
     * Relasi ke model User.
     * Seorang pengguna dapat memiliki banyak tantangan.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi ke model Challenge.
     * Setiap UserChallenge berhubungan dengan satu Challenge.
     */
    public function challenge()
    {
        return $this->belongsTo(Challenge::class);
    }
}
