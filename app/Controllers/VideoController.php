<?php

namespace App\Controllers;

use App\Models\VideoModel;
use App\Models\EpisodeModel;
use CodeIgniter\Controller;

class VideoController extends BaseController
{
    public function index()
{
    $videoModel = new VideoModel();
    $episodeModel = new EpisodeModel();

    $videos = $videoModel->findAll();
    foreach ($videos as &$video) {
        $video['episodes'] = $episodeModel->where('video_id', $video['id'])->findAll();
    }

    return view('admin/videos/index', ['videos' => $videos]);
}

    public function create()
    {
        return view('admin/videos/create');
    }

    public function detail($id)
    {
        $videoModel = new VideoModel();
        $episodeModel = new EpisodeModel();

        $video = $videoModel->find($id);

        if (empty($video)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Video not found.');
        }

        // Fetch other videos for "you might like" section
        $otherVideos = $videoModel->where('id !=', $id)->findAll(5); // Fetch 5 other videos

        return view('user/detail', [
            'video' => $video,
            'otherVideos' => $otherVideos
        ]);
    }

    public function watching($id)
    {
        $videoModel = new VideoModel();
        $episodeModel = new EpisodeModel();

        $video = $videoModel->find($id);

        if (empty($video)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Video not found.');
        }

        $episodes = $episodeModel->where('video_id', $id)->findAll();

        return view('user/watching', [ 'video' => $video, 'episodes' => $episodes]);
    }
    

    public function store()
    {
        $videoModel = new VideoModel();
        $episodeModel = new EpisodeModel();

        // Validate user input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'title' => 'required',
            'description' => 'required',
            'thumbnail' => 'uploaded[thumbnail]',
            'backdrop' => 'uploaded[backdrop]',
            'video_type' => 'required',
            'year' => 'required|numeric',
            'genre' => 'required',
            'duration' => 'required|numeric',
            'video_quality' => 'required',
            'episode_titles' => 'required',
            'episode_urls' => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        // Upload thumbnail
        $thumbnailFile = $this->request->getFile('thumbnail');
        if ($thumbnailFile->isValid() && !$thumbnailFile->hasMoved()) {
            $thumbnailNewName = $thumbnailFile->getRandomName();
            $thumbnailFile->move(FCPATH . 'images', $thumbnailNewName);
            $thumbnail = base_url() . '/images/' . $thumbnailNewName;
        } else {
            return redirect()->back()->withInput()->with('errors', ['thumbnail' => 'Error uploading thumbnail']);
        }

        // Upload backdrop
        $backdropFile = $this->request->getFile('backdrop');
        if ($backdropFile->isValid() && !$backdropFile->hasMoved()) {
            $backdropNewName = $backdropFile->getRandomName();
            $backdropFile->move(FCPATH . 'images', $backdropNewName);
            $backdrop = base_url() . '/images/' . $backdropNewName;
        } else {
            return redirect()->back()->withInput()->with('errors', ['backdrop' => 'Error uploading backdrop']);
        }

        $videoData = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'thumbnail' => $thumbnail,
            'backdrop' => $backdrop,
            'video_type' => $this->request->getPost('video_type'),
            'year' => $this->request->getPost('year'),
            'genre' => $this->request->getPost('genre'),
            'duration' => $this->request->getPost('duration'),
            'video_quality' => $this->request->getPost('video_quality')
        ];

        $videoId = $videoModel->insert($videoData);

        $episodeTitles = $this->request->getPost('episode_titles');
        $episodeUrls = $this->request->getPost('episode_urls');

        foreach ($episodeTitles as $index => $episodeTitle) {
            $episodeData = [
                'video_id' => $videoId,
                'episode_number' => $index + 1,
                'title' => $episodeTitle,
                'url' => $episodeUrls[$index]
            ];
            $episodeModel->insert($episodeData);
        }

        return redirect()->to('/admin/videos')->with('success', 'Video and episodes added successfully!');
    }

    public function edit($id)
    {
        $videoModel = new VideoModel();
        $episodeModel = new EpisodeModel();

        $video = $videoModel->find($id);

        if (empty($video)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Video not found.');
        }

        $episodes = $episodeModel->where('video_id', $id)->findAll();

        return view('admin/videos/edit', [
            'video' => $video,
            'episodes' => $episodes
        ]);
    }

    public function update($id)
    {
        $videoModel = new VideoModel();
        $episodeModel = new EpisodeModel();

        // Validate user input
        $validation = \Config\Services::validation();
        $validation->setRules([
            'title' => 'required',
            'description' => 'required',
            'video_type' => 'required',
            'year' => 'required|numeric',
            'genre' => 'required',
            'duration' => 'required|numeric',
            'video_quality' => 'required'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $videoData = [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'video_type' => $this->request->getPost('video_type'),
            'year' => $this->request->getPost('year'),
            'genre' => $this->request->getPost('genre'),
            'duration' => $this->request->getPost('duration'),
            'video_quality' => $this->request->getPost('video_quality')
        ];

        // Update thumbnail if uploaded
        $thumbnailFile = $this->request->getFile('thumbnail');
        if ($thumbnailFile && $thumbnailFile->isValid() && !$thumbnailFile->hasMoved()) {
            $thumbnailNewName = $thumbnailFile->getRandomName();
            $thumbnailFile->move(FCPATH . 'images', $thumbnailNewName);
            $videoData['thumbnail'] = base_url() . '/images/' . $thumbnailNewName;
        } else {
            $videoData['thumbnail'] = $this->request->getPost('existing_thumbnail');
        }

        // Update backdrop if uploaded
        $backdropFile = $this->request->getFile('backdrop');
        if ($backdropFile && $backdropFile->isValid() && !$backdropFile->hasMoved()) {
            $backdropNewName = $backdropFile->getRandomName();
            $backdropFile->move(FCPATH . 'images', $backdropNewName);
            $videoData['backdrop'] = base_url() . '/images/' . $backdropNewName;
        } else {
            $videoData['backdrop'] = $this->request->getPost('existing_backdrop');
        }

        $videoModel->update($id, $videoData);

        // Handle episodes
        $episodeTitles = $this->request->getPost('episodes') ?? [];
        $episodeUrls = $this->request->getPost('episode_urls') ?? [];
        $newEpisodes = $this->request->getPost('new_episodes') ?? [];
        $removeEpisodes = $this->request->getPost('remove_episodes') ?? [];

        // Delete removed episodes
        if (!empty($removeEpisodes)) {
            foreach ($removeEpisodes as $removeEpisodeId) {
                $episodeModel->delete($removeEpisodeId);
            }
        }

        // Update existing episodes
        if (!empty($episodeTitles) && !empty($episodeUrls)) {
            foreach ($episodeTitles as $episodeId => $episodeTitle) {
                $episodeData = [
                    'title' => $episodeTitle,
                    'url' => $episodeUrls[$episodeId] ?? ''
                ];
                $episodeModel->update($episodeId, $episodeData);
            }
        }

        // Add new episodes
        if (!empty($newEpisodes)) {
            $episodeCount = count($episodeTitles);
            foreach ($newEpisodes as $newEpisode) {
                $episodeData = [
                    'video_id' => $id,
                    'episode_number' => $episodeCount + 1,
                    'title' => $newEpisode['title'],
                    'url' => $newEpisode['url']
                ];
                $episodeModel->insert($episodeData);
                $episodeCount++;
            }
        }

        return redirect()->to('/admin/videos')->with('success', 'Video and episodes updated successfully!');
    }

    public function delete($id)
    {
        $videoModel = new VideoModel();
        $episodeModel = new EpisodeModel();

        $video = $videoModel->find($id);
        if ($video) {
            $episodeModel->where('video_id', $id)->delete();
            $videoModel->delete($id);

            return redirect()->to('/admin/videos')->with('success', 'Video and episodes deleted successfully!');
        } else {
            return redirect()->to('/admin/videos')->with('error', 'Video not found!');
        }
    }

    public function deleteEpisode($id)
    {
        $episodeModel = new EpisodeModel();

        $episode = $episodeModel->find($id);
        if ($episode) {
            $episodeModel->delete($id);
            return redirect()->back()->with('success', 'Episode deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Episode not found!');
        }
    }
}
