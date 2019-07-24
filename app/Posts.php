<?php

namespace App;
// Model initializes the form of the requests user will send to db (don't mistake it with migration)
// We can define the relationships between the data here.
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    // Table Name (if you want something different than Posts)
    protected $table = 'posts';
    // Primary key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true; // its true by default anw
    // fillable. Add this line to allow sending many properties at once as default value???????
    protected $fillable = ['title', 'body', 'user_id', 'user_name'];

    public function user(){
        // declare relationship of post to user: it belongs
        return $this->belongsTo('App\User');
    }
}

// php artisan make:model Posts -m 
