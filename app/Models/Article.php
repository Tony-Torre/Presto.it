<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title','price','description','category_id','user_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function setAccepted ($value) {
        $this->is_Accepted = $value;
        $this->save();
        return true;
    }

    public static function toBeRevisionedCount () {
        return Article::where('is_accepted', null)->count();
    }
}
