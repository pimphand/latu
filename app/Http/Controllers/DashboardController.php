<?php

namespace App\Http\Controllers;

use App\Models\Inbox;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $message = Inbox::where('status', 0)->get();
        return view('admin.dashboard', [
            'message' => $message,
        ]);
    }
}
