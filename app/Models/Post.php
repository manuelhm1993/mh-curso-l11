<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory; //Se debe agregar este trait para usar los factories
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title', 'content', 'category', 'slug'
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

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Get the comments for the blog post.
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
