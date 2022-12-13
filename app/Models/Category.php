<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Category extends Model
{
    use HasFactory;

    public const INACTIVE = 0;
    public const ACTIVE = 1;

    protected $table = 'category';

    protected $primaryKey = 'id';

    protected $fillable = ['title', 'status'];

    public function toActive(): void
    {
        $this->status = $this->status === 1 ? self::INACTIVE : self::ACTIVE;
        $this->save();
    }

    public function portfolio(): HasManyThrough
    {
        return $this->hasManyThrough(
            Portfolio::class,
            CategoryPortfolio::class,
            'category_id',
            'id',
            'id',
            'portfolio_id'
        )->where('portfolios.status', 1);
    }
}
