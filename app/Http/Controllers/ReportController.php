<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use PDF;


class ReportController extends Controller
{
    public function create(): View
    {
        return view('report.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required',
            // 'detail' => 'required',
        ]);

        
        Report::create([
            'title' => $request->title,
            'user_id' => Auth::id()
        ]);
         
        return redirect()->route('home')
                        ->with('success','Report created successfully.');
    }

    public function edit(Report $report): View
    {
        return view('report.edit',compact('report'));
    }

    public function update(Request $request, Report $report): RedirectResponse
    {
        $request->validate([
            'title' => 'required'
        ]);
        
        $report->update($request->all());
        
        return redirect()->route('home')
                        ->with('success','Report updated successfully');
    }

    public function generatePdf()
    {
        $data = Report::firstWhere('user_id', Auth::id())->toArray();
        //dd($data);
        // $data = [
        //     'title' => 'Welcome to ItSolutionStuff.com',
        //     'date' => date('m/d/Y')
        // ];

        $pdf = PDF::loadView('report.pdf', $data);

        return $pdf->stream('test.pdf');
    }
}
