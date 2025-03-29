<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThemeController extends Controller
{
   
    public function update(Request $request)
    {
        session(['dark_mode' => $request->has('dark_mode') ? true : false]);
    
        session([
            'background_color' => $request->input('background_color', '#ffffff'),
            'sidebar_color' => $request->input('sidebar_color', '#eddfea'),
            'text_color' => $request->input('text_color', '#000000'),
            'button_color' => $request->input('button_color', '#000000'),
            'card_color' => $request->input('card_color', '#eddfea'),
            'text_color' => $request->input('text_color', '#000000'),
            'icon_color' => $request->input('icon_color', '#913880'),
            'icon_hover_color' => $request->input('icon_hover_color', '#913880'),

        ]);
    
        return redirect()->back();
    }
    

    
    public function reset()
    {
        session()->forget([
            'background_color',
            'sidebar_color',
            'text_color',
            'button_color',
            'dark_mode',
            'switcher_color',
            'card_color',
            'icon_color',
            'text_color'

        ]);

        session([
            'background_color' => '#ffffff',
            'sidebar_color' => '#eddfea',
            'text_color' => '#000000',
            'button_color' => '#000000',
            'dark_mode' => false,
            'switcher_color' => '#913880' ,
            'icon_color' => '#913880' ,
            'icon_hover_color' => '#913880' ,
            'card_color' => '#eddfea',
            'text_color' => '#000000' ,

        ]);

        return redirect()->back();
    }
}
