<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ["content","status"];

    /**
     * Get the user that owns the Task
     *
     *
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
