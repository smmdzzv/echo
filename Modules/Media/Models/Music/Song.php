<?php


namespace Modules\Media\Models\Music;


use App\Models\BaseModel;
use Modules\Media\Models\Artist\ArtistAlias;
use Modules\Shared\Models\Pivots\BasePivot;

class Song extends BaseModel
{
    public function audioFile()
    {
        return $this->belongsTo(AudioFile::class);
    }

    public function artistAliases()
    {
        return $this->belongsToMany(ArtistAlias::class)
            ->using(BasePivot::class)
            ->withTimestamps();
    }
}
