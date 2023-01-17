<?php

namespace App\Http\Controllers;

use App\Models\Agreement;
use Illuminate\Http\Request;

class AgreementController extends Controller
{
    public function index()
    {
        $agreements = Agreement::all();
        return view('admin/pages/agreement', compact('agreements'));
    }
    public function chooseAgreement($id)
    {
        session(['chosen_agreement' => $id]);
        return redirect()->route('agreement.index');
    }
}
