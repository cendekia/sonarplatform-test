<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the channel report.
     *
     * @return \Illuminate\Http\Response
     */
    public function channel()
    {
        return view('report.channel');
    }

    /**
     * Display a listing of the sentiment report.
     *
     * @return \Illuminate\Http\Response
     */
    public function sentiment()
    {
        return view('report.sentiment');
    }
}
