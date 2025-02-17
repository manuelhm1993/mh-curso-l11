<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title', 'content', 'category', 'published_at', 'is_active'
    ];

    /**
     * Setter: mutador.
     * Getter: accesor.
     */
    protected function title(): Attribute //Indica que retorna un Attribute
    {
        return Attribute::make(
            set: fn ($value) => strtolower($value), //Pasa a minúscula antes de guardar
            get: fn ($value) => ucfirst($value), //Pasa a mayúscula el primer caracter antes de devolver
        );
    }

    /**
     * Hará un casting automático de los valores traidos de la BD
     */
    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'is_active'    => 'boolean',
        ];
    }
}
