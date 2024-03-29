<?php


namespace Modules\Media\Services\artist;


use Illuminate\Http\UploadedFile;
use Modules\Media\Libs\Request\RequestWriter\Traits\ExternalLinkTrait;
use Modules\Media\Models\Artist\Artist;
use Modules\Media\Services\image\AvatarService;

class ArtistService
{
    use ExternalLinkTrait;

    /**
     * @param array $data
     * @return Artist
     */
    public function store(array $data): Artist
    {
        $artist = Artist::create([
            'type' => isset($data['type']) ? $data['type'] : null,
            'info' => isset($data['info']) ? $data['info'] : null
        ]);

        $aliasService = new ArtistAliasService($artist);
        $aliasService->createAliases(collect($data['aliases']));

        if (isset($data['avatarFile']))
            $this->saveAvatar($artist, $data['avatarFile']);

        $this->attachLinks($artist);

        return $artist;
    }

    /**
     * @param Artist $artist
     * @param array $data
     * @return Artist
     */
    public function update(Artist $artist, array $data): Artist
    {
        $aliasService = new ArtistAliasService($artist);
        $aliasService->updateAliases($data);

        $artist->update([
            'type' => isset($data['type']) ? $data['type'] : null,
            'info' => isset($data['info']) ? $data['info'] : null
        ]);

        if (isset($data['avatarFile']))
            $this->saveAvatar($artist, $data['avatarFile']);

        $this->attachLinks($artist);

        return $artist;
    }

    private function saveAvatar(Artist $artist, UploadedFile $avatar)
    {
        $avatarService = new AvatarService();
        $artist->avatar_id = $avatarService->store($avatar)->id;
        $artist->save();
    }

}
