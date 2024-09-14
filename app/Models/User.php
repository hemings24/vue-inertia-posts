<?php

namespace App\Models;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
   use HasFactory,Notifiable;

   protected $fillable = [
      'name',
      'email',
      'password',
   ];

   protected $hidden = [
      'password',
      'remember_token',
   ];

   protected function casts(): array
   {
      return [
         'email_verified_at' => 'datetime',
         'password' => 'hashed',
      ];
   }

   protected function permissions(): Attribute
   {
      return Attribute::make(
         get: function(){
            return[
               'posts_view' => in_array($this->id,[1,2]),
               'posts_manage' => $this->id == 1,
            ];
         }
      );
   }
}