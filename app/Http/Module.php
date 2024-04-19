<?php

namespace App\Models;

use App\Models\Server;
use App\Models\Version;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;


class Module extends Model
{
    protected $table = 'modules';

    public function server()
    {
        return $this->belongsTo(Serveur::class);
    }

    public function versions()
    {
        return $this->hasMany(Version::class);
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
