<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
   
    /**
    * The table associated with the model.
    *
    * @var string
    */
   protected $table = 'categories';
   /**
    * The primary key associated with the table.
    *
    * @var string
    */
   protected $primaryKey = 'id';
 /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
      /**
    * Indicates if the model's ID is auto-incrementing.
    *
    * @var bool
    */
   public $incrementing = true;
  protected $fillable = [
      'nom',
      
  ];
  public function products()
  {
      return $this->hasMany('products');
  }
}
