@extends('layouts.app')

<head>
    <title>今日の予定</title>
</head>

@section('content')
<div class="container mx-auto">
    <h1 class='text-center p-4 text-lg'>{{ $month }}/{{ $day }}の予定</h1>
    @foreach($data as $row)
    <div>
        <p>{{ $row['name'] }}</p>
    </div>
    @endforeach
    <table class="table-fixed bg-purple-100 w-4/5">
        @foreach($hours as $hour)
        <tr>
            <td class="w-2/12 text-center py-2">{{ $hour }}:00</td>
            <td class="bg-pink-200 py-1"></td>
        </tr>
        @endforeach
    </table>
    <a href="{{ route('create') }}" class="block text-center"><button class="m-2">追加</button></a>
</div>
@endsection
