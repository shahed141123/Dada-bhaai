<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\HomePage;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HomePageController extends Controller
{
    //All Home
    public function AllHome()
    {
        $homes = HomePage::all();
        return view('admin.pages.home.all_home', compact('homes'));
    }

    //Edit Home
    public function EditHome($id)
    {
        $home = HomePage::find($id);
        $categorys = Category::orderBy('category_name', 'ASC')->latest()->get();
        $products = Product::orderBy('product_name', 'ASC')->latest()->get();

        return view('admin.pages.home.edit_home', compact('home', 'categorys', 'products'));
    }

    //Update Home
    public function UpdateHome(Request $request)
    {
        ini_set('upload_max_filesize', '100M');
        ini_set('post_max_size', '100M');
        set_time_limit(240);

        $uid = $request->id;
        $home = HomePage::find($uid);

        $validator = $request->validate(

            [
                'video_slider_one_video' => 'mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi| max:500000',

                'video_slider_two_video' => 'mimetypes:video/x-ms-asf,video/x-flv,video/mp4,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi| max:50000',

            ],

        );

        //video_slider_one_video
        if (!empty($request->file('video_slider_one_video'))) {

            $file = $request->file('video_slider_one_video');

            @unlink(public_path('upload/home/' . $home->video_slider_one_video));

            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalName();
            $file->move(public_path('upload/home/'), $fileName);
            $video_slider_one_video = $fileName;
        }

        //video_slider_two_video
        if (!empty($request->file('video_slider_two_video'))) {

            $file = $request->file('video_slider_two_video');

            @unlink(public_path('upload/home/' . $home->video_slider_two_video));

            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalName();
            $file->move(public_path('upload/home/'), $fileName);
            $video_slider_two_video = $fileName;
        }

        //video_slider_one_image
        if (!empty($request->file('video_slider_one_image'))) {

            $file = $request->file('video_slider_one_image');

            @unlink(public_path('upload/home/' . $home->video_slider_one_image));

            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalName();
            $file->move(public_path('upload/home/'), $fileName);
            $video_slider_one_image = $fileName;
        }

        //video_slider_two_image
        if (!empty($request->file('video_slider_two_image'))) {

            $file = $request->file('video_slider_two_image');

            @unlink(public_path('upload/home/' . $home->video_slider_two_image));

            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalName();
            $file->move(public_path('upload/home/'), $fileName);
            $video_slider_two_image = $fileName;
        }

        //image_slider_one_image
        if (!empty($request->file('image_slider_one_image'))) {

            $file = $request->file('image_slider_one_image');

            @unlink(public_path('upload/home/' . $home->image_slider_one_image));

            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalName();
            $file->move(public_path('upload/home/'), $fileName);
            $image_slider_one_image = $fileName;
        }

        //image_slider_two_image
        if (!empty($request->file('image_slider_two_image'))) {

            $file = $request->file('image_slider_two_image');

            @unlink(public_path('upload/home/' . $home->image_slider_two_image));

            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalName();
            $file->move(public_path('upload/home/'), $fileName);
            $image_slider_two_image = $fileName;
        }

        //image_slider_three_image
        if (!empty($request->file('image_slider_three_image'))) {

            $file = $request->file('image_slider_three_image');

            @unlink(public_path('upload/home/' . $home->image_slider_three_image));

            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalName();
            $file->move(public_path('upload/home/'), $fileName);
            $image_slider_three_image = $fileName;
        }

        //background_image_one_image
        if (!empty($request->file('background_image_one_image'))) {

            $file = $request->file('background_image_one_image');

            @unlink(public_path('upload/home/' . $home->background_image_one_image));

            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalName();
            $file->move(public_path('upload/home/'), $fileName);
            $background_image_one_image = $fileName;
        }

        //background_image_two_image
        if (!empty($request->file('background_image_two_image'))) {

            $file = $request->file('background_image_two_image');

            @unlink(public_path('upload/home/' . $home->background_image_two_image));

            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalName();
            $file->move(public_path('upload/home/'), $fileName);
            $background_image_two_image = $fileName;
        }

        //background_image_three_image
        if (!empty($request->file('background_image_three_image'))) {

            $file = $request->file('background_image_three_image');

            @unlink(public_path('upload/home/' . $home->background_image_three_image));

            $fileName = hexdec(uniqid()) . '.' . $file->getClientOriginalName();
            $file->move(public_path('upload/home/'), $fileName);
            $background_image_three_image = $fileName;
        }

        $home->update([

            'status' => $request->status,

            'video_slider_one_title' => $request->video_slider_one_title,
            'video_slider_one_sub_title' => $request->video_slider_one_sub_title,

            'video_slider_two_title' => $request->video_slider_two_title,
            'video_slider_two_sub_title' => $request->video_slider_two_sub_title,

            'image_slider_one_header' => $request->image_slider_one_header,
            'image_slider_one_badge' => $request->image_slider_one_badge,
            'image_slider_one_title' => $request->image_slider_one_title,
            'image_slider_one_sub_title' => $request->image_slider_one_sub_title,
            'image_slider_one_description' => $request->image_slider_one_description,
            'image_slider_one_button_name' => $request->image_slider_one_button_name,
            'image_slider_one_button_link' => $request->image_slider_one_button_link,

            'image_slider_two_header' => $request->image_slider_two_header,
            'image_slider_two_badge' => $request->image_slider_two_badge,
            'image_slider_two_title' => $request->image_slider_two_title,
            'image_slider_two_sub_title' => $request->image_slider_two_title,
            'image_slider_two_description' => $request->image_slider_two_description,
            'image_slider_two_button_name' => $request->image_slider_two_button_name,
            'image_slider_two_button_link' => $request->image_slider_two_button_link,

            'image_slider_three_header' => $request->image_slider_three_header,
            'image_slider_three_badge' => $request->image_slider_three_badge,
            'image_slider_three_title' => $request->image_slider_three_title,
            'image_slider_three_sub_title' => $request->image_slider_three_sub_title,
            'image_slider_three_description' => $request->image_slider_three_description,
            'image_slider_three_button_name' => $request->image_slider_three_button_name,
            'image_slider_three_button_link' => $request->image_slider_three_button_link,

            'category_tab_one_id' => $request->category_tab_one_id,
            'category_tab_two_id' => $request->category_tab_two_id,
            'category_tab_three_id' => $request->category_tab_three_id,
            'category_tab_four_id' => $request->category_tab_four_id,

            'background_image_title' => $request->background_image_title,

            'background_image_button_name' => $request->background_image_button_name,
            'background_image_button_link' => $request->background_image_button_link,
            'background_image_sub_title' => $request->background_image_sub_title,

            'feature_product_one' => $request->feature_product_one,
            'feature_product_two' => $request->feature_product_two,
            'feature_product_three' => $request->feature_product_three,
            'feature_product_four' => $request->feature_product_four,

            'video_slider_one_video' => (!empty($video_slider_one_video) ? $video_slider_one_video : $home->video_slider_one_video),

            'video_slider_two_video' => (!empty($video_slider_two_video) ? $video_slider_two_video : $home->video_slider_two_video),

            'background_image_one_image' => (!empty($background_image_one_image) ? $background_image_one_image : $home->background_image_one_image),

            'background_image_two_image' => (!empty($background_image_two_image) ? $background_image_two_image : $home->background_image_two_image),

            'background_image_three_image' => (!empty($background_image_three_image) ? $background_image_three_image : $home->background_image_three_image),

            'video_slider_one_image' => (!empty($video_slider_one_image) ? $video_slider_one_image : $home->video_slider_one_image),

            'video_slider_two_image' => (!empty($video_slider_two_image) ? $video_slider_two_image : $home->video_slider_two_image),

            'image_slider_one_image' => (!empty($image_slider_one_image) ? $image_slider_one_image : $home->image_slider_one_image),

            'image_slider_two_image' => (!empty($image_slider_two_image) ? $image_slider_two_image : $home->image_slider_two_image),

            'image_slider_three_image' => (!empty($image_slider_three_image) ? $image_slider_three_image : $home->image_slider_three_image),

        ]);

        toastr()->success('HomePage Update Successfully');
        return redirect()->route('all.home');

    }

    //Delete Home
    public function DeleteHome($id)
    {
        $home = HomePage::find($id);

        if (File::exists(public_path('upload/home/') . $home->video_slider_one_video)) {
            File::delete(public_path('upload/home/') . $home->video_slider_one_video);
        }

        if (File::exists(public_path('upload/home/') . $home->video_slider_two_video)) {
            File::delete(public_path('upload/home/') . $home->video_slider_two_video);
        }

        if (File::exists(public_path('upload/home/') . $home->background_image_one_image)) {
            File::delete(public_path('upload/home/') . $home->background_image_one_image);
        }

        if (File::exists(public_path('upload/home/') . $home->background_image_two_image)) {
            File::delete(public_path('upload/home/') . $home->background_image_two_image);
        }

        if (File::exists(public_path('upload/home/') . $home->background_image_three_image)) {
            File::delete(public_path('upload/home/') . $home->background_image_three_image);
        }

        $home->delete();

        toastr()->success('HomePage Delete Successfully');
        return redirect()->route('all.home');

    }

    //DeleteVideo
    public function DeleteVideo($filename)
    {
        // Find the HomePage record by its primary key
        $home = HomePage::find($filename);
        // Check if a record was found
        if ($home) {
            // Construct the full file path
            $filePath = public_path('upload/home/') . $home->video_slider_one_video;

            // Check if the file exists
            if (File::exists($filePath)) {
                // Delete the file
                File::delete($filePath);
                $home->update([
                    'video_slider_one_video' => null,
                ]);
                toastr()->success('Video Delete Successfully');
                return redirect()->route('all.home');
            } else {
                toastr()->error('Video File Not Found');
                return redirect()->route('all.home');
            }

        } else {
            toastr()->success('Can Not Delete Video');
            return redirect()->route('all.home');
        }
    }

    //DeleteVideo2
    public function DeleteVideo2($filename)
    {
        // Find the HomePage record by its primary key
        $home = HomePage::find($filename);
        // Check if a record was found
        if ($home) {
            // Construct the full file path
            $filePath = public_path('upload/home/') . $home->video_slider_two_video;

            // Check if the file exists
            if (File::exists($filePath)) {
                // Delete the file
                File::delete($filePath);
                $home->update([
                    'video_slider_two_video' => null,
                ]);
                toastr()->success('Video Delete Successfully');
                return redirect()->route('all.home');
            } else {
                toastr()->error('Video File Not Found');
                return redirect()->route('all.home');
            }

        } else {
            toastr()->success('Can Not Delete Video');
            return redirect()->route('all.home');
        }
    }

}
