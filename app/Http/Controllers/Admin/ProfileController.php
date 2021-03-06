<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    public function add()
    {
      return view('admin.profile.create');
    }
    public function create(Request $request)
    {
      //Varidationを行う
      $this->validate($request, Profile::$rules);

      $news = new Profile;
      $form = $request->all();

      // データベースに保存する
      $news->fill($form);
      $news->save();
      return redirect('admin/profile/create');
    }
    public function edit()
    {
      return view('admin.profile.edit');
    }
    public function update()
    {
      return redirect('admin/profile/edit');
    }
}
