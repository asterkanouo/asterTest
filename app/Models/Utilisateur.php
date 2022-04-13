<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\User as Authenticatable;
use Illuminate\Auth\User as basicAuthenticatable;

class Utilisateur extends Model implements Authenticatable
{
    use HasFactory;
    use basicAuthenticatable;
    protected $table='utilisateur';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }
}
