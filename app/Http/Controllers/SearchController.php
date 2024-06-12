<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        // Lakukan logika pencarian disini, misalnya mencari data dari database berdasarkan keyword
        // Contoh:
        $results = Kost::where('nama', 'like', '%' . $keyword . '%')->get();

        // Kemudian kembalikan hasil pencarian ke view
        return view('search-results', ['results' => $results]);
    }
}
