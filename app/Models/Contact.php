<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
   use HasFactory;

   protected $attributes = [
      'done' => false,
   ];

   protected $fillable = [
      'name',
      'name_kana',
      'email',
      'company',
      'tel',
      'title',
      'body',
      'done',
      'manager',
   ];
}
