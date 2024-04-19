<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table = 'modules';
    protected $primaryKey = 'idModule';

    public function serveurs()
    {
        return $this->belongsTo(Serveur::class, 'idServeur');
    }

    public function versions()
    {
        return $this->hasMany(Version::class , 'idVersion');
    }
    
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nomModule',
    ];

}
