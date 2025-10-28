<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller; 
use Illuminate\Http\Request;

class EmbedController extends Controller
{
    /**
     * Menampilkan halaman Company Profile yang berisi iframe.
     * @return \Illuminate\View\View
     */
    public function showEmbed()
    {
        return view('embed.demo');
    }
}
