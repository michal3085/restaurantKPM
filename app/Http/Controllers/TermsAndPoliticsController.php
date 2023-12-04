<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsAndPoliticsController extends Controller
{
    public function termsShow()
    {
        if (session('locale') === 'pl') {
            return view('main.terms.terms_pl')->with(['menu' => 0]);
        }
        return view('main.terms.terms_en')->with(['menu' => 0]);
    }
}
