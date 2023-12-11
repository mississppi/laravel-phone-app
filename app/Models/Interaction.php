<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interaction extends Model
{
    protected $fillable = ['customer_id', 'notes', 'interaction_data'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
