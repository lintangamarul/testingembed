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

    /**
     * Menampilkan halaman Ribbed Deck Calculator
     * @return \Illuminate\View\View
     */
    public function showRibbedDeck()
    {
        return view('embed.calculators.ribbed-deck');
    }

    /**
     * Menampilkan halaman Beam Penetration Calculator
     * @return \Illuminate\View\View
     */
    public function showBeamPenetration()
    {
        return view('embed.calculators.beam-penetration');
    }

    /**
     * Menampilkan halaman CLT Wall Calculator
     * @return \Illuminate\View\View
     */
    public function showCltWall()
    {
        return view('embed.calculators.clt-wall');
    }

    /**
     * Menampilkan halaman Timber Concrete Composite Calculator
     * @return \Illuminate\View\View
     */
    public function showTimberConcreteComposite()
    {
        return view('embed.calculators.timber-concrete-composite');
    }
}