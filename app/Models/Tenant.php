<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $fillable = [
        'slug',
        'name',
        'subject',
        'professor',
        'student',
        'date',
        'introduccion',
        'evidencia',
        'conclusiones',
        'referencias',
        'published',
    ];

    protected function casts(): array
    {
        return [
            'date' => 'date',
            'published' => 'boolean',
        ];
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
