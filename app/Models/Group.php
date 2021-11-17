<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Group extends Model
{
    use HasFactory, LogsActivity;

    protected $table = 'user_groups';

    protected $fillable = [
        'name',
        'shareInitial',
        'shareFinal',
        'description',
    ];

    //NECESSÁRIO PARA OS LOGS
    protected static $logName = 'Grupos';
    protected static $logAttributes = [
        'name',
        'shareInitial',
        'shareFinal',
        'description',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
