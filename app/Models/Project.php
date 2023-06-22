<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'description','type_id'];

    public function types():BelongsTo{

        return $this->belongsTo(Type::class, 'type_id', 'id');
    }

    public function technology():BelongsToMany{
        return $this->belongsToMany('App\Models\Technology');
    }
}
