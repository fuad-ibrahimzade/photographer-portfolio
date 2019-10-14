<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Validator;
use App\Gallery;
use App\Photo;
use App\Slide;
use App\About;
use App\Logo;
use App\Link;

class DashboardController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
        $this->middleware('auth:api');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$galleries = Gallery::with('photos')->get();
        $photos = Photo::all();
        return response()->json(['galleries'=>$galleries,'photos'=>$photos]);
//        return view('dashboard.index', compact('galleries', 'photos'));
    }


    public function destroyGallery(Gallery $gallery)
    {
        $photos = [];
        foreach ($gallery->photos as $photo) {
            $photos[] = $photo->name;
        }
        Gallery::destroy($gallery->id);
        Storage::delete($photos);
        foreach ($photos as $value) {
            $public_idOLD=preg_replace('/http:\/\/res\.cloudinary\.com\/.*\/image\/upload\//','',$value);
            $delete=\Cloudinary\Uploader::destroy($public_idOLD);
        }
        return response()->json(['destroyGallery'=>'Gallery has been deleted successfully!']);
//        return back()->with('destroyGallery', 'Gallery has been deleted successfully!');
    }


    public function destroyPhoto(Photo $photo)

    {
    	Photo::destroy($photo->id);
        Storage::delete($photo->name);
        $public_idOLD=preg_replace('/http:\/\/res\.cloudinary\.com\/.*\/image\/upload\//','',$photo->name);
        $delete=\Cloudinary\Uploader::destroy($public_idOLD);
        return response()->json(['destroyPhoto' => 'Photo has been deleted successfully!']);
//    	return back()->with('destroyPhoto', 'Photo has been deleted successfully!');
    }


    public function newGallery(Request $request)

    {
    	$gallery = new Gallery();
    	$gallery->name = $request->name;
    	$gallery->save();
        return response()->json(['createGallery' => 'Gallery has been created successfully!']);
//    	return back()->with('createGallery', 'Gallery has been created successfully!');
    }


    public function addPhoto(Request $request)

    {
        $validator = Validator::make($request->all(), [
            'photos.*' => 'required|image',
        ]);

        if ($validator->fails()) {
            return response()->json(['fileError' => 'Yalnız jpeg, png, bmp, gif və ya svg sonluqlu fayllar yükləyə bilərsiniz!']);
//            return back()->with('fileError', 'Yalnız jpeg, png, bmp, gif və ya svg sonluqlu fayllar yükləyə bilərsiniz!');
        }

        foreach ($request->photos as $rphoto) {
//            $name = $rphoto->store('photos');
            $cloudnaryFile=\Cloudinary\Uploader::upload($rphoto);
            $name=cloudinary_url($cloudnaryFile['public_id']);
            $photo = new Photo();
            $photo->gallery_id = $request->gallery_id;
            $photo->name = $name;
            $photo->save();
        }

        return response()->json(['addPhoto' => 'Photos has been added successfully!']);
//        return back()->with('addPhoto', 'Photos has been added successfully!');
    }


    public function slide()

    {
        $slide = Slide::all();
        return response()->json(['slide' => $slide]);
//        return view('dashboard.slide', compact('slide'));
    }


    public function addSlide(Request $request)

    {
        $validator = Validator::make($request->all(), [
            'photos.*' => 'required|image',
        ]);

        if ($validator->fails()) {
            return response()->json(['fileError' => 'Yalnız jpeg, png, bmp, gif və ya svg sonluqlu fayllar yükləyə bilərsiniz!']);
//            return back()->with('fileError', 'Yalnız jpeg, png, bmp, gif və ya svg sonluqlu fayllar yükləyə bilərsiniz!');
        }

        foreach ($request->photos as $rphoto) {
//            $name = $rphoto->store('slide');
            $cloudnaryFile=\Cloudinary\Uploader::upload($rphoto);
            $name=cloudinary_url($cloudnaryFile['public_id']);
            $photo = new Slide();
            $photo->name = $name;
            $photo->save();
        }

        return response()->json(['addPhoto' => 'Photos has been added successfully!']);
//        return back()->with('addPhoto', 'Photos has been added successfully!');

    }


    public function destroySlide(Slide $slide)

    {
        Slide::destroy($slide->id);
        Storage::delete($slide->name);
        $public_idOLD=preg_replace('/http:\/\/res\.cloudinary\.com\/.*\/image\/upload\//','',$slide->name);
        $delete=\Cloudinary\Uploader::destroy($public_idOLD);
        return response()->json(['destroyPhoto' => 'Photo has been deleted successfully!']);
//        return back()->with('destroyPhoto', 'Photo has been deleted successfully!');
    }


    public function about()

    {
        $about = About::first();
        return response()->json(['about' => $about]);
//        return view('dashboard.about', compact('about'));
    }


    public function updateAbout(Request $request)

    {
        $validator = Validator::make($request->all(), [
            'photo' => 'image',
        ]);

        if ($validator->fails()) {
            return response()->json(['fileError' => 'Yalnız jpeg, png, bmp, gif və ya svg sonluqlu fayllar yükləyə bilərsiniz!']);
//            return back()->with('fileError', 'Yalnız jpeg, png, bmp, gif və ya svg sonluqlu fayllar yükləyə bilərsiniz!');
        }

        $about = About::first();
        $request->validate([
            'title' => 'required',
            'desc' => 'required'
        ]);

        if ($request->hasFile('photo')) {
            Storage::delete($about->photo);
            $public_idOLD=preg_replace('/http:\/\/res\.cloudinary\.com\/.*\/image\/upload\//','',$about->photo);
            $delete=\Cloudinary\Uploader::destroy($public_idOLD);
//            $photo = $request->photo->store('about');
            $cloudnaryFile=\Cloudinary\Uploader::upload($request->photo);
            $photo=cloudinary_url($cloudnaryFile['public_id']);
            $about->photo = $photo;
        }

        $about->title = $request->title;
        $about->desc = $request->desc;
        $about->save();

        return response()->json(['redirectTo' => '/about']);
//        return redirect('/about');

    }


    public function logo()

    {
        return view('dashboard.logo');
    }


    public function updateLogo(Request $request)

    {
        $validator = Validator::make($request->all(), [
            'photo' => 'required|image',
        ]);

        if ($validator->fails()) {
            return response()->json(['fileError' => 'Yalnız jpeg, png, bmp, gif və ya svg sonluqlu fayllar yükləyə bilərsiniz!']);
//            return back()->with('fileError', 'Yalnız jpeg, png, bmp, gif və ya svg sonluqlu fayllar yükləyə bilərsiniz!');
        }

        $logo = Logo::first();
        Storage::delete($logo->photo);
        $public_idOLD=preg_replace('/http:\/\/res\.cloudinary\.com\/.*\/image\/upload\//','',$logo->photo);
        $delete=\Cloudinary\Uploader::destroy($public_idOLD);
//        $photo = $request->photo->store('logo');
        $cloudnaryFile=\Cloudinary\Uploader::upload($request->photo);
        $photo=cloudinary_url($cloudnaryFile['public_id']);
        $logo->photo = $photo;
        $logo->save();

        return response()->json(['redirectTo' => '/']);
//        return redirect('/');
    }


    public function link()

    {
        $link = Link::all();
        return response()->json(['link' => $link]);
//        return view('dashboard.link', compact('link'));
    }


    public function updateLink(Request $request)

    {
        $request->validate([
            'facebook' => 'required',
            'instagram' => 'required',
            'twitter' => 'required',
            'youtube' => 'required'
        ]);

        $link = Link::all();

        $link[0]->name = $request->facebook;
        $link[0]->save();
        $link[1]->name = $request->instagram;
        $link[1]->save();
        $link[2]->name = $request->twitter;
        $link[2]->save();
        $link[3]->name = $request->youtube;
        $link[3]->save();

        return response()->json(['redirectTo' => '/']);
//        return redirect('/');
    }
}
