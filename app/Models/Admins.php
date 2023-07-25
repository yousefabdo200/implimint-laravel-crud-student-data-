<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admins extends Model 
{
    use HasFactory;

    protected $table = 'admin';
    protected $fillable = ['user_name', 'password'];
    /*

    // Implement the methods required by the Authenticatable interface

    // getAuthIdentifierName(): Returns the name of the unique identifier for the user.
    public function getAuthIdentifierName()
    {
        return 'id'; // Change 'id' to the primary key column name of your 'admin' table
    }

    // getAuthIdentifier(): Returns the unique identifier for the user.
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    // getAuthPassword(): Returns the hashed password for the user.
    public function getAuthPassword()
    {
        return $this->password;
    }

    // getRememberToken(): Returns the "remember me" token for the user (used for "remember me" functionality).
    public function getRememberToken()
    {
        return $this->remember_token;
    }

    // setRememberToken($value): Sets the "remember me" token for the user (used for "remember me" functionality).
    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    // getRememberTokenName(): Returns the name of the "remember me" token column in the database.
    public function getRememberTokenName()
    {
        return 'remember_token';
    }*/
}
