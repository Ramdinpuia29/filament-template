<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use SolutionForest\FilamentTree\Concern\ModelTree;

class Menu extends Model
{
    use HasFactory, SoftDeletes, ModelTree;

    protected $fillable = ['parent_id', 'title', 'order', 'link'];
}
