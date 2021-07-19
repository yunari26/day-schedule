@extends('layouts.app')
<title>予定を追加する</title>
@section('content')
<div class="text-center">
    <h1>予定の追加</h1>
    <div class="schedule_form">
        <form method="post" action="{{ route('store') }}">
            @csrf
            <input type="hidden" name="date" value="{{ $today }}">
            <input type="text" name="name" placeholder="予定">
            <div class="times_select flex">
                <p>開始時間</p>
                <select name="startTime">
                    @foreach($hours as $hour)
                    <option value="{{ $hour }}">{{ $hour }}:00</option>
                    @endforeach
                </select>
                <p>終了時間</p>
                <select name="endTime">
                    @foreach($hours as $hour)
                    <option value="{{ $hour }}">{{ $hour }}:00</option>
                    @endforeach
                </select>
            </div>

            <input type="submit" value="作成">
        </form>
    </div>
</div>
@endsection
