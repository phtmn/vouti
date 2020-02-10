<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\Image\Manipulations;

class CaboEleitoral extends Model implements HasMedia
{
  use HasMediaTrait;

    protected $table = 'cabos_eleitorais';

    protected $fillable = ['image','cpf','telefone'];

    // protected $fillable = ['id','nome_completo','cpf','telefone', 'email','senha'];
    protected $guarded = ['id', 'created_at', 'update_at'];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * MediaLibrary configuration
     */
    public function registerMediaConversions(Media $media = null)
    {
        $this->addMediaConversion('thumb')
            ->fit(Manipulations::FIT_CROP, 320, 320)
            ->quality(85)
            ->nonQueued()
            ->performOnCollections('cabo_eleitoral');

        $this->addMediaConversion('mobile')
            ->width(940)
            ->quality(85)
            ->nonQueued()
            ->performOnCollections('cabo_eleitoral');
    }

    public function getThumbAttribute()
    {
        $image = $this->getFirstMedia('cabo_eleitoral');
        return isset($image) ? $image->getUrl('thumb') : null;
    }

    public function getMobileCoverAttribute()
    {
        $image = $this->getFirstMedia('cabo_eleitoral');
        return isset($image) ? $image->getUrl('mobile') : null;
    }
}
