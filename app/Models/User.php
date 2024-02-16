<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Filament\Models\Contracts\FilamentUser;

// namespace App\Models;
 
// use Filament\Models\Contracts\FilamentUser;
// use Filament\Panel;
// use Illuminate\Foundation\Auth\User as Authenticatable;

// class User extends Authenticatable implements FilamentUser
// {
//     // ...
 
//     public function canAccessPanel(Panel $panel): bool
//     {
//         return str_ends_with($this->email, '@prakoso.id') && $this->hasVerifiedEmail();
//         // if ($panel->getId() === 'admin') {
//         //     return str_ends_with($this->email, '@yourdomain.com') && $this->hasVerifiedEmail();
//         // }
 
//         // return true;
//     }
// }


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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
}

 
