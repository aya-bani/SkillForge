<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
class FontController extends Controller{

public function updateFont(Request $request)
{
    $request->validate([
        'fontSelect' => 'required|string'
    ]);

    // Store the selected font in the session
    session(['selected_font' => $request->input('fontSelect')]);

    // Redirect back with a success message
    return redirect()->back()->with('success', 'Font updated successfully!');
}
}