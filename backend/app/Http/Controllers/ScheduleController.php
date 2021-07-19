<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    public function index()
    {
        return view('schedule.index');
    }

    public function day()
    {

        $today = Carbon::today()->toDateString();
        $today = explode('-', $today);
        $month = (int)$today[1];
        $day = (int)$today[2];
        $startHour = 6;
        $hours = [];
        for ($i = 1; $i <= 24; $i++) {
            if ($startHour === 25) {
                $startHour = 1;
            }
            $hours[] = $startHour;
            $startHour++;
        }

        // 予定の取得
        $date = Carbon::today('Asia/Tokyo')->format('Y-m-d');
        $data = Schedule::where('date', $date)
            ->get();
        return view('schedule.day', compact('month', 'day', 'hours', 'data'));
    }

    public function create()
    {
        $today = Carbon::today('Asia/Tokyo')->format('Y-m-d');

        // セレクトボックス生成
        $startHour = 6;
        $hours = [];
        for ($i = 1; $i <= 24; $i++) {
            if ($startHour === 25) {
                $startHour = 1;
            }
            $hours[] = $startHour;
            $startHour++;
        }

        return view('schedule.create', compact('today', 'hours'));
    }

    public function store(Request $request)
    {
        $post = $request->all();
        $data = ['name' => $post['name'], 'date' => $post['date'], 'startTime' => $post['startTime'], 'endTime' => $post['endTime']];
        schedule::insert($data);
        return redirect('today');
    }
}
