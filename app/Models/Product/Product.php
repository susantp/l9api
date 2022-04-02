<?php

declare(strict_types=1);

namespace App\Models\Product;

use App\Enum\ProductType;
use App\Models\Department\Department;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $casts = [
        'combo' => 'array',
    ];

    public function department(): BelongsToMany
    {
        return $this->belongsToMany(Department::class);
    }

    public function scopeIsTypeCombo()
    {
        return $this->where('type', ProductType::COMBO)->exists();
    }
}
