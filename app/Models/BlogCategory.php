<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;
    
    protected $table = 'blogCategory';
    protected $guarded = ['id'];

    public function Blogs(){
        return $this->hasMany(Blog::class);

    }


}
