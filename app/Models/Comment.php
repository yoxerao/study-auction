<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comment';

    // Don't add create and update timestamps in database.
    public $timestamps  = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date', 'content', 'id_auction', 'id_user',
    ];

    /**
     * The user who made this comment.
     */
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * The auction for this comment.
     */
    public function auction() {
        return $this->belongsTo('App\Models\Auction');
    }
}
