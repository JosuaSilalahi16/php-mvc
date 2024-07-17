<?php
namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class User extends Authenticatable
{
 use HasFactory, Notifiable;
 protected $table = 'users';
 protected $primaryKey = 'UserID';
 protected $fillable = [
 'Username', 'Email', 'Password', 'Role'
 ];
 protected $hidden = [
 'Password', 'remember_token',
 ];
 public $timestamps = false;
 public function getAuthPassword()
 {
 return $this->Password;
 }
}