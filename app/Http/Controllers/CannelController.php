<?php

namespace App\Http\Controllers;

use App\Cannel;
use App\Traits\UploadFiles;
use App\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CannelController extends Controller
{
    use UploadFiles;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $channels = Cannel::all();

        return view('home.channels.index', compact('channels'));
    }

    public function getChannelVideos () {
        return response()->json(Video::all(), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.channels.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required|min:2|max:50',
            'description'   => 'nullable|min:5'
        ]);

        $channel = new Cannel();

        $channel = $this->handleImageUpload($request, $channel);

        $channel->name         = $request->name;
        $channel->description  = $request->description;
        $channel->user_id      = auth()->id();

        $channel->save();

        return redirect()->back()->with(['message' => 'Canal adicionado com sucesso.']);
    }

    private function handleImageUpload (Request $request, Cannel $cannel) {

        // Check if a profile image has been uploaded
        if ($request->has('logo')) {
            // Get image file
            $image = $request->file('logo');
            // Make a image name based on user name and current timestamp
            $name = Str::slug($request->input('logo')).'_'.time();
            // Define folder path
            $folder = '/uploads/channels/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadImage($image, $folder, 'public', $name);

            if ($cannel->logo && $cannel->logo !== 'assets/img/s4.png') {

                $this->deleteImate($folder, 'public', explode('/', $cannel->logo)[3]);

            }

            // Set user profile image path in database to filePath
            $cannel->logo = $filePath;
        }

        return $cannel;

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Cannel  $cannel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('home.channels.show', ['channel' => Cannel::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cannel  $cannel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cannel = Cannel::find($id);

        return view('home.channels.edit', ['channel' => $cannel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cannel  $cannel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cannel $channel)
    {

        $request->validate([
            'name'          => 'required|min:2|max:50',
            'description'   => 'nullable|min:5'
        ]);

        $channel = $this->handleImageUpload($request, $channel);

        $channel->name         = $request->name;
        $channel->description  = $request->description;
        $channel->user_id      = auth()->id();

        $channel->save();

        return redirect()->back()->with(['message' => 'Canal adicionado com sucesso.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cannel  $cannel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cannel = Cannel::find($id);

        $message = 'O Canal \'' . $cannel->name . '\' foi deletado com sucesso.';

        $cannel->delete();

        return redirect()->to('/channels')->with(['message' => $message]);
    }
}
