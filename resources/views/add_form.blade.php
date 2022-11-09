@extends('layouts.main')
@section('title', 'Add Course Form')

@section('content')
<div class="insert">
    <div class="form-left">
        <h1>Insert <br> Your Course</h1>
    </div>
    <div class="form-right">
        <form action="{{route('add_logic')}}" method="post" class="form-action">
        @csrf
            <label for="text">Course Code</label> <br>
            <input type="text" placeholder="Code Course" name="code_course"><br>
            @error('code_course')
                {{$message}}
            @enderror
            <label for="text">Course Name</label><br>
            <input type="text" placeholder="Course" name="name_course"><br>
            @error('name_course')
                {{$message}}
            @enderror
            <label for="text">Class Course</label><br>
            <input type="text" placeholder="Class" name="class_course"><br>
            @error('class_course')
                {{$message}}
            @enderror
            <label for="text">Score Test</label><br>
            <input type="text" placeholder="Score" name="score_course"><br>
            @error('score_course')
                {{$message}}
            @enderror
            <div class="submit">
                <input type="submit" class="submit_button">
            </div>
        </form>
    </div>
</div>
@endsection
