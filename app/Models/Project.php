<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Type;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'link_repository', 'img', 'topic', 'slug', 'type_id'];

    public static function generateSlug($name) {
        
        return Str::slug($name, '-');
    }

    public function type() {
        return $this->belongsTo(Type::class);
    }
}
