<?php

namespace App\Http\Controllers;

use App\Category;
use App\Traits\UploadFiles;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CategoryController extends Controller
{

    use UploadFiles;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::all();

        return view('home.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('home.categories.add');
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

        $category = new Category();

        $category = $this->handleImageUpload($request, $category);

        $category->name         = $request->name;
        $category->description  = $request->description;
        $category->user_id      = auth()->id();

        $category->save();

        return redirect()->back()->with(['message' => 'Categoria adicionada com sucesso.']);
    }

    private function handleImageUpload (Request $request, Category $category) {

        // Check if a profile image has been uploaded
        if ($request->has('image')) {
            // Get image file
            $image = $request->file('image');
            // Make a image name based on user name and current timestamp
            $name = Str::slug($request->input('name')).'_'.time();
            // Define folder path
            $folder = '/uploads/categories/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            // Upload image
            $this->uploadImage($image, $folder, 'public', $name);

            if ($category->image && $category->image !== 'assets/img/s2.png') {

                $this->deleteImate($folder, 'public', explode('/', $category->image)[3]);

            }

            // Set user profile image path in database to filePath
            $category->image = $filePath;
        }

        return $category;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('home.categories.edit-cat', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

        $request->validate([
            'name'          => 'required|min:2|max:50',
            'description'   => 'nullable|min:5'
        ]);

        $category = $this->handleImageUpload($request, $category);

        $category->name         = $request->name;
        $category->description  = $request->description;

        $category->save();

        return redirect()->back()->with(['message' => 'Categoria ('.$category->id.') actualizada com sucesso.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $message = 'Categoria \'' . $category->name . '\' deletada com sucesso.';

        $category->delete();

        return redirect()->to('/categories')->with(['message' => $message]);

    }
}
