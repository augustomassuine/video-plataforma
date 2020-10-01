<?php

namespace App\Http\Controllers;

use App\Cannel;
use App\Category;
use App\Course;
use App\Traits\UploadVideos;
use App\Video;
use FFMpeg;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VideoController extends Controller
{

    use UploadVideos;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::orderBy('updated_at', 'desc')->get();

        return view('home.videos.index', compact('videos'));
    }

    public function upload()
    {
        return view('home.videos.upload');
    }

    public function playVideo(Video $video)
    {

        $videos = Video::whereNull('course_id')->orderBy('created_at', 'desc')->get();

        return view('home.videos.show', compact( 'video', 'videos'));
    }
    public function playVideoCourse(Course $course, Video $video)
    {
        return view('home.videos.show', compact('course', 'video'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function uploadMass(Request $request)
    {

        $videosIds = json_decode($request->videosIds);

        $courseId = $request->course_id && $request->course_id !== '-1' ? $request->course_id : null;
        $channelId = $request->channel_id && $request->channel_id !== '-1' ? $request->channel_id : null;

        foreach ($videosIds as $videoId)
        {
            $video = Video::find($videoId);

            $video->title       = $request->title ? $request->title : $video->title;
            $video->description = $request->description ? $request->description : $video->description;
            $video->course_id   = $courseId ? $courseId : $video->course_id;
            $video->channel_id  = $channelId ? $channelId : $video->channel_id;

            $video->save();
        }

        return redirect()->to('/videos')->with(['message' => '('. count($videosIds).') videos actualizados com sucesso.']);


    }
    public function store(Request $request)
    {

        $files = $request->file('videos');

        $videosIds = [];

        if($request->hasFile('videos'))
        {
            foreach ($files as $file) {

                $name = Str::random(16);

                $videoPath = '/uploads/videos/' . $name . '.' . $file->getClientOriginalExtension();

                $video = new Video();

                $video->title       = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);;
                $video->description = $request->description;
                $video->price       = $request->price;
                $video->category_id = $request->category_id;
                $video->channel_id  = $request->channel_id;
                $video->course_id   = $request->course_id;
                $video->user_id     = auth()->id();
                $video->video_url   = $this->handleVideoUpload($file, $name);
                $video->duration    = $this->getVideoDuration($videoPath);
                $video->image_url   = $this->getVideoImage($videoPath, $name);

                $video->save();

                $videosIds[] = $video->id;

            }

            if ($request->redirect_to === 'editPage') {

                return $this->showMassEditForm($videosIds);

            }

            return redirect()->back()->with(['message' => '('. count($files).') videos carregados com sucesso.']);

        } else {

            return redirect()->back()->with(['message' => 'Nenhum foi selecionado. Por favor selecione vídeos primeiro.']);

        }

    }

    private function showMassEditForm ($videosIds) {

        $videos = null;
        $video = null;

        $courses = Course::where('user_id', auth()->id())->get();
        $channels = Cannel::where('user_id', auth()->id())->get();
        $categories = Category::all();

        if (count($videosIds) > 1) {
            $videos = Video::whereIn('id', $videosIds)->get()   ;
        } else {
            $video = Video::find($videosIds[0]);
        }

        return view('home.videos.edit-videos',
            compact('videos', 'video', 'channels', 'courses', 'categories', 'videosIds'
        ));

    }

    private function getVideoImage ($videoPath, $name) {

        $videoImagePath = '/uploads/videos_image/' . $name . '.png';

        FFMpeg::fromDisk('public')
            ->open($videoPath)
            ->getFrameFromSeconds(15)
            ->export()
            ->toDisk('public')
            ->save($videoImagePath);

        return $videoImagePath;

    }

    private function getVideoDuration ($videoPath) {

        $getID3 = new \getID3;
        $file = $getID3->analyze('storage' . $videoPath);
        $duration = date('H:i:s', $file['playtime_seconds']);

        return $duration;

    }

    private function handleVideoUpload ($video, $name) {

        // Define folder path
        $folder = '/uploads/videos/';
        // Make a file path where image will be stored [ folder path + file name + file extension]
        $filePath = $folder . $name. '.' . $video->getClientOriginalExtension();
        // Upload image
        $this->uploadVideo($video, $folder, 'public', $name);

        // Set user profile image path in database to filePath
        return $filePath;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        return view('uploadVideo');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
    }
}
