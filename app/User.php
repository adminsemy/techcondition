<?php

namespace App;

use Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    const DEFAUL_ROLE = 0;
    const SEM_RES = 11;
    const KRBAKI_RES = 12;
    const VOSKR_RES = 13;
    const VARN_RES = 14;
    const BOR_RES = 15;
    const ALL_RES = 10;
    const ADMIN = 1;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Chek to user in role editor end show SemRES
     *
     * @return bool     
     */
    public function isSemRes(): bool
    {
        return self::SEM_RES === Auth::user()->role;
    }

    /**
     * Chek to user in role editor end show KrBakiRES
     *
     * @return bool     
     */
    public function isKrbakiRes(): bool
    {
        return self::KRBAKI_RES === Auth::user()->role;
    }

    /**
     * Chek to user in role editor end show VoskrRES
     *
     * @return bool     
     */
    public function isVoskrRes(): bool
    {
        return self::VOSKR_RES === Auth::user()->role;
    }

    /**
     * Chek to user in role editor end show VarnRES
     *
     * @return bool     
     */
    public function isVarnRes(): bool
    {
        return self::VARN_RES === Auth::user()->role;
    }

    /**
     * Chek to user in role editor end show BorRES
     *
     * @return bool     
     */
    public function isBorRes(): bool
    {
        return self::BOR_RES === Auth::user()->role;
    }

    /**
     * Chek to user in role editor end show All RES
     *
     * @return bool     
     */
    public function isAllRes(): bool
    {
        return self::ALL_RES === Auth::user()->role;
    }

    /**
     * Chek to user in role admin
     *
     * @return bool     
     */
    public function isAdmin(): bool
    {
        return self::ADMIN === Auth::user()->role;
    }

    /**
     * Chek to user in role admin
     *
     * @return bool     
     */
    public function isReadOnly(): bool
    {
        return self::DEFAUL_ROLE === Auth::user()->role;
    }

    public function isEditRes(): bool
    {
        return true;
    }
}
