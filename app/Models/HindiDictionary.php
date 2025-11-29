<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HindiDictionary extends Model
{
    protected $table = "dictionary_entries";
    protected $fillable = ['english_phrase','hindi_meaning','english_defination','hindi_script'];
}
