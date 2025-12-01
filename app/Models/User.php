<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

/**
 * @mixin \Spatie\Permission\Traits\HasRoles
 */
class User extends Authenticatable
{
    protected $fillable = [
        'name', 'nik', 'password',
    ];
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasRoles;
    // ...existing code...

    /**
     * Override auth identifier to use nik instead of email.
     */
    public function getAuthIdentifierName()
    {
        return 'nik';
    }
// ...existing code...
    /**
     * Override username for authentication to use nik instead of email.
     */
    public function username()
    {
        return 'nik';
    }
}
