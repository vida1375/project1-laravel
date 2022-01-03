<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Image;
use File;

class Post extends Model
{
    public function pages()
    {
        return $this->hasMany('App\search');
    }
    public function posts()
    {
        return $this->belongsTo('App\Coment');
    }
    public function pposts()
    {
        return $this->hasMany('App\archive');
    }
    public function archives()
    {
        return $this->belongsTo('App\archive');
    }
    public function path() {
        return 'posts/'.date('Y/m', $this->published_at);
    }
    
    public function storeImage($source) {
        
        $image = Image::make($source);
        $fileName = md5($this->id).md5(time());
        $path = storage_path('app/public/'.$this->path());
        if (!File::exists($path)) File::makeDirectory($path, 0775, true);
    
        $image->backup();
        $image->fit(800, 450)->save($path.'/'.$fileName.'.jpg', 80);
    
        $image->reset();
        $image->fit(256, 144)->save($path.'/'.$fileName.'_thumbnail.jpg', 80);
    
        if ($this->image != null) {
            File::delete($path.'/'.$this->image.'.jpg');
            File::delete($path.'/'.$this->image.'_thumbnail.jpg');
        }
        $this->image = $fileName;
        $this->save();
    
        return $fileName;
    }
    
    public function image_url($thumbnail = '') {
        return $this->image ? 'http://127.0.0.1:8000/storage/' . $this->path() . '/' . $this->image . $thumbnail . '.jpg' : 'http://127.0.0.1:8000/storage/default' . $thumbnail . '.jpg';
    }
}
