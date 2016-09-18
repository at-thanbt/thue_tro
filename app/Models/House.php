<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $table = 'houses';

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */

    protected $fillable = array(
        'id',
        'user_id',
        'category_id',
        'number_room',
        'avatar',
        'address',
        'price',
        'created_at',
        'updated_at'
    );

  /**
   * House belongs to a category.
   *
   * @return Illuminate\Database\Eloquent\Relations\BelongsTo
   */
    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id');
    }

  /**
   * House belongs to a user.
   *
   * @return Illuminate\Database\Eloquent\Relations\BelongsTo
   */
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

   /**
    * House has many rooms.
    *
    * @return Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function room()
    {
      return $this->hasMany('App\Models\Room', 'house_id');
    }


}
