<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;
    protected $fillable=[
        'item_code',
        'name',
        'description',
        'pic'
     ];
      public function subcat(){
        return $this->belongsTo(Subcategory::class,'item_code');
      }

}
