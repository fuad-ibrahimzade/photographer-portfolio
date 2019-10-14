<?php

namespace App\Http\Controllers;
use App\Gallery;
use App\Photo;
use App\Slide;
use App\About;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()

    {
        $galleries = Gallery::all();
        $logo = \App\Logo::first();

        $photos = Slide::all();
        if(request()->ajax()){
            return response()->json($photos);
        }
//        return view('home.index', compact('photos'));
        return view('index',compact('photos','logo','galleries'));
    }


    public function getHomeData()

    {
        $galleries = Gallery::all();
        $logo = \App\Logo::first();
        $link = \App\Link::all();

        $photos = Slide::all();
        return response()->json(['galleries'=>$galleries,'logo'=>$logo,'link'=>$link]);
    }

    public function getPhotosData()

    {
        $photos = Slide::all();
        return response()->json(['photos'=>$photos]);
    }

    public function getAboutData()

    {
        $about = About::first();
        return response()->json(['about'=>$about]);
    }

    public function getGalleryData($gallery)

    {
        $images = Photo::all();
        $photos = [];
        foreach ($images as $photo) {
            if ($photo->gallery->name == $gallery) {
                $photos[] = $photo;
            }
        }
        return response()->json(['photos'=>$photos]);
    }


    public function about()

    {
        $about = About::first();
        return view('home.about', compact('about'));
    }


    public function contact()

    {
        return view('home.contact');
    }


    public function gallery($gallery)

    {
        $images = Photo::all();
        $photos = [];
        foreach ($images as $photo) {
            if ($photo->gallery->name == $gallery) {
                $photos[] = $photo;
            }
        }
        return view('home.gallery', compact('photos', 'gallery'));
    }
}
