<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitors extends Model
{
    /** @use HasFactory<\Database\Factories\VisitorsFactory> */
    use HasFactory;

    // Specify the table name (if not following Laravel's naming convention)
    protected $table = 'visitors';

    // Define fillable fields
    protected $fillable = [
        'name',
        'birthday',
        'age',
        'sex',
        'address',
        'contact_info',
        'visitor_type',
    ];

    public function VlogHistories()
    {
        return $this->hasMany(VisitorLogHistories::class, 'visitor_id');
    }
    
}
