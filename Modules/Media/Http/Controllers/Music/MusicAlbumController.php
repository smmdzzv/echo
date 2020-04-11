<?php


namespace Modules\Media\Http\Controllers\Music;


use Illuminate\Support\Facades\Storage;
use Modules\Media\Http\Filters\Media\MusicAlbumFilter;
use Modules\Media\Http\Requests\Music\MusicAlbumRequest;
use Modules\Media\Libs\Request\RequestWriter\Music\StoreMusicAlbumRequestWriter;
use Modules\Media\Libs\StringComparator\DiceBestMatchFinder;
use Modules\Media\Models\Music\MusicAlbum;
use Modules\Media\Models\Music\MusicAlbumType;
use Modules\Shared\Http\Controllers\BaseController;
use Modules\Shared\Http\Responses\FileResponse;

class MusicAlbumController extends BaseController
{
    public function __construct()
    {
        $admin = [
            'store'
        ];

        $this->middleware('auth')->only($admin);
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
        $query = MusicAlbum::with('artistAliases');
        $filter = new MusicAlbumFilter(request()->all(), $query);
        return $this->callGetOrPaginate($filter->filter());
    }

    public function getAlbum($album)
    {
        return MusicAlbum::with(['songs', 'type', 'artistAliases'])->findOrFail($album);
    }

    public function getCover($album)
    {
        $cover = MusicAlbum::whereHas('cover')->where('id', $album)->firstOrFail()->cover;
        $fileResponse = new FileResponse($cover->path, $cover->mime_type);
        return $fileResponse->generateResponse();
    }

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

//    public function countView(MusicAlbum $album)
//    {
//        $album->view_count += 1;
//        $album->save();
//        return;
//    }
}
