<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoarderLogHistories extends Model
{
    /** @use HasFactory<\Database\Factories\BoarderLogHistoriesFactory> */
    use HasFactory;

    protected $table = 'boarder_log_histories';

    protected $fillable = [
        'boarder_id',
        'status',
        'time_stamp',
        'reason',

    ];
    public $timestamps = false;

    // Define relationship with the Boarder model
    public function boarder()
    {
        return $this->belongsTo(Boarders::class, 'boarder_id', 'school_id');
    }
}
