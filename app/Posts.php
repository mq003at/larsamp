<?php

namespace App;
// Model redefines the form of the requests user will send to db (don't mistake it with migration)
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

}

// php artisan make:model Posts -m 
