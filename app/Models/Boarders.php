<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boarders extends Model
{
    use HasFactory;

    // Specify the table name (if not following Laravel's naming convention)
    protected $table = 'boarders';

    // Define the primary key
    protected $primaryKey = 'school_id';

    // Disable auto-incrementing as the primary key is not an integer
    public $incrementing = false;

    // Specify the primary key type if it's non-integer
    protected $keyType = 'string';

    // Define fillable fields
    protected $fillable = [
        'school_id',
        'name',
        'birthday',
        'age',
        'sex',
        'address',
        'contact_info',
        'program',
    ];

    public $timestamps = false;

    // Define relationship with BoarderLogHistory
    public function BlogHistories()
    {
        return $this->hasMany(BoarderLogHistories::class, 'boarder_id', 'school_id');
    }
}
