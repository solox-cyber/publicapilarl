<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class InfoController extends Controller
{
    public function show()
    {
        return response()->json([
            'email' => 'osadiayesolomon@gmail.com', // change email to the one used to register on the HNG12 Slack workspace
            'current_datetime' => Carbon::now()->toIso8601String(),
            'github_url' => 'https://github.com/yourusername/your-repo'
        ]);
    }
}
