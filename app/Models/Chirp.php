<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;

    /*
    Passing all of the data from a request to your model can be risky. 
    Imagine you have a page where users can edit their profiles. 
    If you were to pass the entire request to the model, then a user could edit any column they like, such as an is_admin column. 
    This is called a mass assignment vulnerability.

    Laravel protects you from accidentally doing this by blocking mass assignment by default. 
    Mass assignment is very convenient though, as it prevents you from having to assign each attribute one-by-one. 
    We can enable mass assignment for safe attributes by marking them as "fillable".
    */
    protected $fillable = [
        'message',
    ];
}
