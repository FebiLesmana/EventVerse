<?php

namespace App\Http\Controllers;

use App\Models\EventList;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $dataEvent = EventList::select(['id', 'nama', 'waktu', 'organizer', 'poster'])->latest()->get();
        
        $title = 'Dashboard';
        return view('user.dashboard.dash', compact('title', 'dataEvent'));

        
    }
}
