<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\Carbon;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Scout\Searchable;

class User extends Authenticatable   
{
    use HasApiTokens, HasFactory, Notifiable ,Searchable ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function getCreatedAtAttribute($value)
    {
        // Convert the date to a Carbon instance
        $date = Carbon::parse($value);

        // Customize the date format as needed
        return $date->format('Y-m-d H:i'); // Adjust the format to your preference
    }
    public function getUpdatedAtAttribute($value)
    {
        // Convert the date to a Carbon instance
        $date = Carbon::parse($value);

        // Customize the date format as needed
        return $date->format('Y-m-d H:i'); // Adjust the format to your preference
    }

}
