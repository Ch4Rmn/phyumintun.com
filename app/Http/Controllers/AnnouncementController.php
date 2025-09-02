<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    //
    public function showLatestPost()
    {
        // နောက်ဆုံးထွက်တဲ့ Post ကိုတစ်ခုယူချင်ရင်
        $announcement = Announcement::latest()->first();
        dd($announcement);

        // နောက်ဆုံးထွက်တဲ့ Post တွေကို (ဥပမာ 5 ခု) ယူချင်ရင်
        // $latestPosts = Post::latest()->take(5)->get();

        return view('pages.index')->with('announcement', $announcement);
    }
}
