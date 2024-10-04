<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{

    public function updateMetaTitle(Request $req)
    {

        $data = $req->validate([
            'meta_title' => 'required|string|max:255',
        ]);

        Setting::create($data);
        return redirect()->back()->with('success', 'title updated successfully!');
    }

    public function updateMetaTag(Request $req)
    {
        $data = $req->validate([
            'meta_tag' => 'required|string|max:255',
        ]);


        Setting::create($data);
        return redirect()->back()->with('success', 'tag updated successfully');
    }

    public function updateMetaDescription(Request $req)
    {
        $data = $req->validate([
            'meta_description' => 'required|string',
        ]);

        Setting::create($data);
        return redirect()->back()->with('success', 'description updated successfully');
    }

    public function updateMetaLogo(Request $req)
    {
        $data = $req->validate([
            'meta_logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // image work
        $image = $req->file('meta_logo');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $data['meta_logo'] = $imageName;

        Setting::create($data);
        return redirect()->back()->with('success', 'logo updated successfully');
    }



    public function updateMetaBanner(Request $req)
    {
        $data = $req->validate([
            'banner' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // image work
        $image = $req->file('banner');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $data['banner'] = $imageName;

        Setting::create($data);
        return redirect()->back()->with('success', 'banner updated successfully');
    }

    public function updateMetaCopyright(Request $req)
    {
        $data = $req->validate([
            'copyright' => 'required|string|max:255',
        ]);

        Setting::create($data);
        return redirect()->back()->with('success', 'copyright updated successfully');
    }
}
