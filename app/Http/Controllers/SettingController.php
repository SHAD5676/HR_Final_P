<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
     
        $setting = Setting::first();
        return view('backend.settings.index', compact('setting'));
    }

    public function update(Request $request)
    {
      
        $request->validate([
            'company_name' => 'required|max:255',
        ]);

      
        $data = $request->except('_token'); 

        $setting = Setting::first();

        if ($setting) {
         
            $setting->update($data);
        } else {
          
            Setting::create($data);
        }

        return back()->with('success', 'Settings saved successfully!');
    }
}