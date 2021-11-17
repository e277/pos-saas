<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\CategoryType
 *
 * @property int $id
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Category[] $category
 * @property-read int|null $category_count
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryType query()
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CategoryType whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CategoryType extends Model
{
    use HasFactory;

    protected $fillable = [
        'type'
    ];
    public function category(){
        return $this->hasmany(Category::class);
    }
}
