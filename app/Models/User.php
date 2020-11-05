<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'ipaddress',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
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
     * Get the client details associated with the user if user is client.
     */
    public function client()
    {
        return $this->hasOne('App\Models\Client');
    }

    /**
     * Get the employee details associated with the user  if user is employee.
     */
    public function employee()
    {
        return $this->hasOne('App\Models\Employee');
    }

    /**
     * Get the service provider details associated with the user  if user is service provider.
     */
    public function service_provider()
    {
        return $this->hasOne('App\Models\ServiceProvider');
    }

    /**
     * The roles that belong to the user.
     */
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }
}
