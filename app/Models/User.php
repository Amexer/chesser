<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Lab404\Impersonate\Models\Impersonate;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasRoles;
    use Impersonate;
    use Notifiable;

    /** @var array<int, string> $fillable The attributes that are mass assignable. */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /** @var array<int, string> $hidden The attributes that should be hidden for serialization. */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /** @var array<string, string> $casts The attributes that should be cast. */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_super_admin'    => 'boolean',
    ];

    /**
     * Check to see if this user can impersonate.
     *
     * @return bool Returns true if this user can impersonate else false.
     */
    public function canImpersonate()
    {
        return $this->is_super_admin || $this->can('impersonate');
    }

    /**
     * Check to see if this user can be impersonated.
     *
     * @return bool Returns true if this user can be impersonated and false if not.
     */
    public function canBeImpersonated()
    {
        return !$this->is_super_admin || $this->can('be.impersonated');
    }
}
