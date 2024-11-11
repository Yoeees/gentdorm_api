<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorLogHistories extends Model
{
    /** @use HasFactory<\Database\Factories\VisitorLogHistoriesFactory> */
    use HasFactory;

    protected $table = 'visitor_log_histories';

    protected $fillable = [
        'visitor_id',
        'status',
        'time_stamp',
        'purpose',

    ];
    public $timestamps = false;

    // Define relationship with the Boarder model
    public function visitor()
    {
        return $this->belongsTo(Visitors::class, 'visitor_id');
    }
    
}
