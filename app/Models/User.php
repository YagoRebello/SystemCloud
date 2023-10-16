<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Notifications\ResetPassword;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'tenant_id',
        'nome',
        'email',
        'email_alternativo',
        'email_verified_at',
        'password',
        'password_anterior',
        'data_cadastro',
        'data_alteracao_senha',
        'data_alteracao',
        'data_login',
        'data_logout',
        'ip_login',
        'cod_vendedor',
        'colaborador',
        'grupos_usuario_id',
        'situacao',
        'cod_vendedor',
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
    ];

    public function grupo()
    {
        return $this->hasOne(GruposUsuario::class,'id','grupos_usuario_id');
    }

    public function sendPasswordResetNotification($token)
    {

        $this->notify(new ResetPassword($token));
    }


}