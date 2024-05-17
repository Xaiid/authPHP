<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Member;

class StatisticsController extends Controller
{
    public function create(): View
    {
        $num_of_male = Member::where('gender', 'Male')->count();
        $num_of_female = Member::where('gender', 'Female')->count();
        $num_of_non_binary = Member::where('gender', 'Non-binary')->count();
        $num_of_polygender = Member::where('gender', 'Polygender')->count();
        $num_of_agender = Member::where('gender', 'Agender')->count();
        $num_of_genderqueer = Member::where('gender', 'Genderqueer')->count();
        $num_of_genderfluid = Member::where('gender', 'Genderfluid')->count();

        return view('statistics.create', ['num_of_male' => $num_of_male, 
        'num_of_female' => $num_of_female, 
        'num_of_non_binary' => $num_of_non_binary, 
        'num_of_polygender' => $num_of_polygender, 
        'num_of_agender' => $num_of_agender, 
        'num_of_genderqueer' => $num_of_genderqueer, 
        'num_of_genderfluid' => $num_of_genderfluid]);
    }

    public function barChart()
    {
        $num_of_male = Member::where('gender', 'Male')->count();
        $num_of_female = Member::where('gender', 'Female')->count();
        $num_of_non_binary = Member::where('gender', 'Non-binary')->count();
        $num_of_polygender = Member::where('gender', 'Polygender')->count();
        $num_of_agender = Member::where('gender', 'Agender')->count();
        $num_of_genderqueer = Member::where('gender', 'Genderqueer')->count();
        $num_of_genderfluid = Member::where('gender', 'Genderfluid')->count();
        
        $data = [
            'labels' => ['Male', 'Female', 'Nonbinary', 'Polygender', 'Agender', 'Genderqueer', 'Genderfluid'],
            'data' => [$num_of_male, $num_of_female, $num_of_non_binary, $num_of_polygender, $num_of_agender, $num_of_genderqueer, $num_of_genderfluid],
        ];
        return view('statistics.create', compact('data'));
    }
}