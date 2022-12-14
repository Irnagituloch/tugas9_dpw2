<?php

namespace App\Models;
use App\Models\User;

class produk extends Model
{
   protected $table = 'produk';

   protected $casts =  [
      'created_at' => 'datetime',
      'updated_at' => 'datetime',
      'berat' => 'decimal:2'
   ];

   function seller(){
    return $this->belongsTo( user::class,'id_user');
   }

   function getHargaStringAttribute(){
   return "Rp." .number_format ($this->attributes['harga']);
   }

}
