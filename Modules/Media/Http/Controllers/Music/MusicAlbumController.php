<?php


namespace Modules\Media\Http\Controllers\Music;



use Modules\Media\Http\Filters\MusicAlbumQuery;
use Modules\Media\Http\Requests\Music\MusicAlbumRequest;
use Modules\Media\Libs\Request\RequestWriter\Music\StoreMusicAlbumRequestWriter;
use Modules\Media\Libs\StringComparator\DiceBestMatchFinder;
use Modules\Media\Models\Music\MusicAlbum;
use Modules\Media\Models\Music\MusicAlbumType;
use Modules\Shared\Http\Controllers\BaseController;

class MusicAlbumController extends BaseController
{
    public function __construct()
    {
        $admin = [
            'store'
        ];

        $this->middleware(['auth', 'roles.allow:admin'])->only($admin);
    }

    public function store(MusicAlbumRequest $request)
    {
        $writer = new StoreMusicAlbumRequestWriter($request->all());
        $writer->write();
    }

    public function getAlbumTypes()
    {
        return MusicAlbumType::all();
    }

    public function getAlbums()
    {
        $query = MusicAlbum::with('artistAliases', 'type');
        $filtered = new MusicAlbumQuery($query);
        return $this->callGetOrPaginate($filtered);
    }

    public function getAlbum($album)
    {
        return MusicAlbum::with(['songs.artistAliases', 'songs.genres', 'type', 'artistAliases', 'externalLinks'])
            ->findOrFail($album)
            ->append('genres');
    }

//    public function getCover(MusicAlbum $album)
//    {
//        ;
//        $imageProvider = new ImageFileProvider('cover');
//        return $imageProvider->getResizedFileResponse(
//            $album->cover_id,
//            request()->get('width', 400),
//            request()->get('height', 400),
//            90
//        );
//    }

    public function countPlay(MusicAlbum $album)
    {
        $album->play_count += 1;
        $album->save();
        return;
    }

    public function filter()
    {
        $aliases = MusicAlbum::all();
        $finder = new DiceBestMatchFinder(request()->get('title'), $aliases->all(), 'title');
        $matches = $finder->findBestMatches($this->stringMatchMinRate);

        return array_map(function ($match) {
            return $match->entity;
        }, $matches);
    }
}
