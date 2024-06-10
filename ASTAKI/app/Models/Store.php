<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $guarded=[];
    protected $fillable=[];

    protected $dates=['created at'];

    public function stock():BelongsTo
    {
        return $this->BelongsTo(stock::class);
    }
}
