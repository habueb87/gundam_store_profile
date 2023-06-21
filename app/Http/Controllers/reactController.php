<?php

namespace App\Http\Controllers;
use App\Models\gundam;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class reactController extends Controller
{
    public function welcome()
    {
        $gundam = gundam::all();

        return view('welcome', [
            'title' => "welcome",
            'gundam' => $gundam
        ]);
    }

    public function home()
    {
        $gundam = gundam::all();
        return view('home', [
            'title' => "home",
            'gundam' => $gundam,
        ]);
    }

    public function admin()
    {
        $gundam = gundam::all();
        /* dd($gundam); */
        return view('admin/dashboard', [
            'title' => "admin",
            'gundam' => $gundam,
        ]);
    }

    public function gundam()
    {
        $gundam = gundam::all();
        /* dd($gundam); */
        return view('admin/gundam', [
            'title' => "gundam",
            'gundam' => $gundam,
        ]);
    }

    public function editGundam(Request $request)
    {
        return view('/admin/edit/editGundam', [
            'title' => "edit",
            'id' => $request->id,
            'name' => $request->name,
            'desc' => $request->desc,
            'series' => $request->series,
            'img' => $request->img,
            'data' => gundam::find($request->id)
            
        ]);
    }

    public function editSaveGundam(Request $request)
    {
        $flights = gundam::find($request->id);
        /* $flights->id = $request->id; */

        $validateData = $request->validate([
            'name' => 'required',
            'series' => 'required',
            'desc' => 'required',
            'img' => 'required',
        ]);

        $flights->name = $validateData['name'];
        $flights->series = $validateData['series'];
        $flights->desc = $validateData['desc'];
        $flights->img = $validateData['img'];

        $flights->save();

        return redirect('/admin/gundam');
    }

    public function createGundam()
    {
        return view('/admin/create/createGundam', [
            'title' => "create",
        ]);
    }

    public function createSaveGundam(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'series' => 'required',
            'desc' => 'required',
            'img' => 'required',
        ]);

        gundam::create($validateData);

        return redirect('/admin/gundam')->with('success', 'Registration Success!');;
    }

    public function deleteGundam(Request $request)
    {
        $gundam = Gundam::find($request->id);
        $gundam->delete();

        return redirect('/admin/gundam');
    }

}
