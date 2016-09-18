<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
  protected $table = 'rooms';

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */

  protected $fillable = array(
      'id',
      'name',
      'house_id',
      'description',
      'is_acitve',
      'created_at',
      'updated_at'
  );
  /**
   * Room belongs to a house.
   *
   * @return Illuminate\Database\Eloquent\Relations\BelongsTo
   */
    public function house()
    {
        return $this->belongsTo('App\Models\House', 'house_id');
    }

}
