<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildServiceCat extends Model
{
    use HasFactory;

    protected $table='child_categories';
    protected $guarded = [];


    public function CollectServiceAndChild(){
        return $this->hasOne(Services::class,'id','parent_id');
    }


}
