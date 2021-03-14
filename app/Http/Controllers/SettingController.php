<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
class SettingController extends Controller
{
   public function index()
   {
      $settings = Setting::where('id', 1)->first();
      return view('admin.settings.index', compact('settings'));
   }

   public function updateGeneral(Request $request, $id)
   {
      // dd($request->all());
      // General Settings
      $request->validate([
         'title' => 'required',
         'analytics' => 'required'
      ]);

      if(!$request->has('logo')) {
         $logoNew = $request->logoOld;
      } else {
         $logo = $request->logo;
         $randomLogo = uniqid(true);
         $logoNew = $randomLogo . $logo->getClientOriginalName();
         $logo->move('uploads/logo/', $logoNew);
         unlink('uploads/logo/'.$request->logoOld);
      }

      if(!$request->has('favicon')) {
         $faviconNew = $request->faviconOld;
      } else {
         $favicon = $request->favicon;
         $randomFavicon = uniqid(true);
         $faviconNew = $randomFavicon . $favicon->getClientOriginalName();
         $favicon->move('uploads/favicon/', $faviconNew);
         unlink('uploads/favicon/'.$request->faviconOld);
      }

      $data = [
         'title' => $request->title,
         'logo' => $logoNew,
         'favicon' => $faviconNew,
         'google_analytics' => $request->analytics,
      ];

      Setting::where('id', $id)
               ->update($data);

      session()->flash('success', 'Berhasil Perbarui General Settings');
      return redirect()->route('settings.index');
   }

   public function socialMedia(Request $request, $id)
   {
      $request->validate([
         'facebook' => 'required',
         'twitter' => 'required',
         'instagram' => 'required',
      ]);

      $data = [
         'facebook' => $request->facebook,
         'twitter' => $request->twitter,
         'instagram' => $request->instagram,
      ];

      Setting::where('id', $id)
               ->update($data);

      session()->flash('success', 'Berhasil Perbarui Media Social');
      return redirect()->route('settings.index');
   }
}
