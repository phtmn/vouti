<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\Image\Manipulations;

class Candidato extends Model implements HasMedia
{
    use HasMediaTrait;
    
    protected $fillable = ['id','image','nome_completo','numero','cargo'];

    public function eleitores()
    {
        return $this->belongsToMany(Eleitor::class);
    }

    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')
            ->fit(Manipulations::FIT_CROP, 320, 320)
            ->quality(85)
            ->nonQueued()
            ->performOnCollections('candidato');

        $this->addMediaConversion('mobile')
            ->width(940)
            ->quality(85)
            ->nonQueued()
            ->performOnCollections('candidato');
    }

    public function getThumbAttribute()
    {
        $image = $this->getFirstMedia('candidato');
        return isset($image) ? $image->getUrl('thumb') : null;
    }

    public function getMobileCoverAttribute()
    {
        $image = $this->getFirstMedia('candidato');
        return isset($image) ? $image->getUrl('mobile') : null;
    }

    
}
