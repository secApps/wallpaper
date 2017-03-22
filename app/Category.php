<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    //

    protected $table = 'categories';

    protected $fillable = [
        'id', 'name', 'folder_name',
    ];
    protected $appends = ['image_urls'];
    protected $hidden = ['created_at','updated_at'];

    public function getImageUrlsAttribute()
    {
        $files = Storage::allFiles($this->folder_name);
        $images=[];
        if(count($files)>0){
            foreach ($files as $file)
            {
                $url =env('STORAGE_PATH'). '/' . (string)$file;
                $url = new Url((string)$file,$url,rtrim($url,'jpeg').'mov');
                array_push($images, $url->toString());

            }
        }
        return $images;
    }

}
