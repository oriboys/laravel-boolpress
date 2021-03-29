<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('guest.home');
    }

    public function contatti()
    {
        return view('guest.contatti');
    }

    public function contattato(Request $request)
    {
      $dati = $request->all();

      $newLead = new Lead();
      $newLead->fill($dati);
      $newLead->save();
      // dd($newLead);


        return redirect()->route('guest.inviato');
    }

    public function confermato()
    {
        return view('guest.contattato');
    }
}
