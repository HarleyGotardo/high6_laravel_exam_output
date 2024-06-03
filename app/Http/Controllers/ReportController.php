<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request; // since this is not used, i just commented it out.
use App\Models\Patient;

class ReportController extends Controller
{
    // This function retrieves the count of PUI, PUM, Positive, and Negative cases from the database and returns them to the 'reports.awareness' view
    public function awareness()
    {
        $PUI = Patient::where('case_type', 'PUI')->count();
        $PUM = Patient::where('case_type', 'PUM')->count();
        $Positive = Patient::where('case_type', 'Positive on Covid')->count();
        $Negative = Patient::where('case_type', 'Negative on Covid')->count();
    
        return view('reports.awareness', compact('PUI', 'PUM', 'Positive', 'Negative'));
    }

    // This function retrieves the count of active, recovered, and death cases from the database and returns them to the 'reports.coronaVirus' view
    public function coronaVirus()
    {
        $active = Patient::where('coronavirus_status', 'active')->count();
        $recovered = Patient::where('coronavirus_status', 'recovered')->count();
        $death = Patient::where('coronavirus_status', 'death')->count();
    
        return view('reports.coronaVirus', compact('active', 'recovered', 'death'));
    }
}
