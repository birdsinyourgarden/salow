<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Physician extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'last_name',
      'email',
      'phone_number',
      'picture',
      'description',
      'specialty_id',
  ];
  
  public function specialty() {
    return $this->belongsTo(Specialty::class);
  }

}
