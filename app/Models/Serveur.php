<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Deploiment;


class Serveur extends Model
{
    use HasFactory;
    protected $primaryKey = 'idServeur';
    

    protected $fillable = [
        'dbName',
        'adresseIP',
    ];

    public function modules()
    {
        return $this->hasMany(Module::class,'idModule');
    }
    public function versions()
    {
        return $this->hasMany(Version::class, 'idVersion');
    }
    
};

