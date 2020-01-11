<?php

namespace App\Models;

use App\Enum\PapelEnum;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\Image\Manipulations;

class User extends Authenticatable implements HasMedia
{
    use Notifiable, HasMediaTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'nome_partido', 'sigla', 'num_legenda','password', 'papel_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function papel()
    {
        return $this->belongsTo(Papel::class);
    }

    public function cabo()
    {
        return $this->hasOne(CaboEleitoral::class);
    }

    public function sindicato()
    {
        return $this->belongsTo(Sindicato::class)->first();
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class)->first();
    }

    public function empresaParceira()
    {
        return $this->belongsTo(EmpresaParceira::class)->first();
    }

    public function trabalhador()
    {
        return $this->belongsTo(Trabalhador::class)->first();
    }

    public function isSerben()
    {
        return $this->papel_id == PapelEnum::SERBEN;
    }

    public function isSindicato()
    {
        return $this->papel_id == PapelEnum::SINDICATO;
    }

    public function isEmpresa()
    {
        return $this->papel_id == PapelEnum::EMPRESA;
    }

    public function isEmpresaParceira()
    {
        return $this->papel_id == PapelEnum::EMPRESA_PARCEIRA;
    }

    public function isAdmin() {
        return $this->papel_id == PapelEnum::ADMIN;
    }

    public function isCandidato() {
        return $this->papel_id == PapelEnum::CANDIDATO;
    }

    public function isCaboEleitoral() {
        return $this->papel_id == PapelEnum::CABO_ELEITORAL;
    }

    public function isTrabalhador() {
        return $this->papel_id == PapelEnum::TRABALHADOR;
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
