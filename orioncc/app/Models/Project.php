<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
class Project extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    protected $guarded = [];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('flipster')
            ->withResponsiveImages();

        $this->addMediaCollection('mini_gallary')
            ->withResponsiveImages();
    }
    public function registerMediaConversions(?Media $media = null): void
    {

        $this->addMediaConversion('flip_out')
            ->width(350)
            ->height(380)
            ->withResponsiveImages()
            ->performOnCollections('flipster');

        $this->addMediaConversion('flip_out_low')
            ->width(350)
            ->height(380)
            ->quality(70)
            ->performOnCollections('flipster');

        $this->addMediaConversion('mini_gallary_out')
            ->width(770)
            ->height(340)
            ->performOnCollections('mini_gallary');
    }
    public function Client(){
        return $this->belongsTo(Client::class , 'client_id' , 'id');
    }
    public function Sector(){
        return $this->belongsTo(Sector::class , 'sector_id' , 'id');
    }


}
