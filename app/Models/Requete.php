<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requete extends Model
{
    use HasFactory;
    protected $primaryKey = 'idRequete';

    protected $fillable = [
        'requetesSql',
    ];
    
    public function user()
    {
    return $this->belongsTo(User::class, 'idUser');
    }

    public function version()
    {
        return $this->belongsTo(Version::class,'idVersion');
    }
}
