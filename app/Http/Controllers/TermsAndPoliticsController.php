<?php

namespace App\Http\Controllers;

class TermsAndPoliticsController extends Controller
{
    public function getPlPrivacyPolicyPdf()
    {
        return response()->file('assets/img/pdf/pp.pdf');
    }

    public function getEngPrivacyPolicyPdf()
    {
        return response()->file('assets/img/pdf/eng.pdf');
    }
}
