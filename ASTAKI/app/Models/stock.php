<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class stock extends Model
{
    use HasFactory;

    protected $guarded=[];
    protected $fillable=[];

    protected $cast = [
        'documentation' => AsCollection::class
    ];

    protected $dates=['created at'];

    public function store():HasOne
    {
        return $this->hasOne(store::class,'acq_From','store_Id');
    }
}
