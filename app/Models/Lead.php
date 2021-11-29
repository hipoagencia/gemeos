<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Lead extends Model
{
    use HasFactory,LogsActivity;

    protected $table = 'leads';

    protected $fillable = [
        'name',
        'email',
        'date_of_birth',
        'source_id',
        'product_id',
        'user_id',
        'tel',
        'cel',
        'product_text',
    ];

    //NECESSÁRIO PARA OS LOGS
    protected static $logName = 'Lead';
    protected static $logAttributes = [
        'name',
        'email',
        'date_of_birth',
        'source_id',
        'product_id',
        'user_id',
        'tel',
        'cel',
        'product_text',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function source()
    {
        return $this->hasOne(LeadSource::class);
    }

    public function setDateOfBirthAttribute($value)
    {
        $this->attributes['date_of_birth'] = $this->converStringToDate($value);
    }

    public function getDateOfBirthAttribute($value)
    {
        return date('d/m/Y', strtotime($value));
    }


    public function getCreatedAtAttribute($value)
    {
        return date('d/m/Y', strtotime($value)) . ' às ' . date('H:i', strtotime($value));
    }
}
