<?php


namespace Modules\Media\Models\Music;


use Modules\Counters\Interfaces\Playable;
use Modules\Counters\Interfaces\Viewable;
use Modules\Counters\Models\Playback;
use Modules\Counters\Models\View;
use Modules\Media\Models\Artist\ArtistAlias;
use Modules\Media\Models\ExternalLink\ExternalLink;
use Modules\Media\Models\Image\ImageFile;
use Modules\Media\Models\Video\Video;
use Modules\Shared\Models\BaseModel;
use Modules\Shared\Models\Pivots\BasePivot;

/**
 * @property ImageFile coverImage
 * @property array artistAliases
 * @property string title
 * @property int play_count
 * @property mixed audioFile
 * @property int download_count
 * @property mixed formatted_name
 * @property mixed allow_download
 */
class Song extends BaseModel implements Playable, Viewable
{
    protected $casts = [
        'lyrics' => 'string',
        'allow_download' => 'boolean'
    ];

    protected $appends = ['albumsTitles'];

    protected $hidden = [
        'channel_mode',
        'channels',
        'codec',
        'compression_ratio',
        'created_at',
        'created_by_id',
        'deleted_at',
        'deleted_by_id',
        'encoder_options',
        'lossless',
        'size',
        'updated_at',
        'updated_by_id'
    ];

    public function audioFile()
    {
        return $this->belongsTo(AudioFile::class);
    }

    public function artistAliases()
    {
        return $this->belongsToMany(ArtistAlias::class)
            ->using(BasePivot::class)
            ->withTimestamps()
            ->latest();
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class)
            ->using(BasePivot::class)
            ->withTimestamps();
    }

    public function albums()
    {
        return $this->belongsToMany(MusicAlbum::class)
            ->using(BasePivot::class)
            ->withTimestamps();
    }

    public function coverImage()
    {
        return $this->belongsTo(ImageFile::class);
    }

    public function clip()
    {
        return $this->belongsTo(Video::class);
    }

    public function externalLinks()
    {
        return $this->morphMany(ExternalLink::class, 'linkable');
    }

    public function getFormattedNameAttribute()
    {
        $name = $this->artistAliases->implode('name', ', ');
        return "{$name} - {$this->title}";
    }

    public function getAlbumsTitlesAttribute()
    {
        return $this->albums()->get(['title'])->implode('title', ', ');
    }

    public function playbacks()
    {
        return $this->morphMany(Playback::class, 'playable');
    }

    public function views(){
        return $this->morphMany(View::class, 'viewable');
    }
}
