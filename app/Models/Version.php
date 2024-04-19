<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    protected $primaryKey = 'idVersion';
    use HasFactory;


    protected $fillable = [
        'numVersion',
    ];
    
    public function module()
    {
        return $this->belongsTo(Module::class,'idModule');
    }
    public function requet()
    {
        return $this->hasMany(Requete::class, 'idRequete');
    }
}
