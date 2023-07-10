<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Admin.
 *
 * @method static \Database\Factories\AdminFactory            factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 *
 * @mixin \Eloquent
 */
class Admin extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
    ];

    /**
     * @return BelongsTo<User, Admin>
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
