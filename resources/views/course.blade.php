@extends('layouts.main')
@section('title', 'Course')

@section('content')
<div class="course-BG">
    <div class="course">
        <H1>----Score Course ODD 2022/2023----</H1>
        <table class="table">
            <thead class="nav-table">
              <tr>
                <th scope="col">Course Code</th>
                <th scope="col">Course Name</th>
                <th scope="col">Class</th>
                <th scope="col">Score</th>
                <th scope="col">Grade</th>
              </tr>
            </thead>

            @if (count($course)<1)
              <h1>NO GAME DATA FOUND!!!</h1>
            @else
                @foreach ($course as $listcourse)
                    <tbody class="nav-body">
                        <tr>
                            <div>
                                <td>{{$listcourse->code_course}}</td>
                                <td>{{$listcourse->name_course}}</td>
                                <td>{{$listcourse->class_course}}</td>
                                <td>{{$listcourse->score_course}}</td>
                                @if (($listcourse->score_course>=90) and ($listcourse->score_course<=100))
                                    <td>A</td>
                                @elseif (($listcourse->score_course>=80) and ($listcourse->score_course<90))
                                    <td>B</td>
                                @elseif (($listcourse->score_course>=70) and ($listcourse->score_course<80))
                                    <td>C</td>
                                @else
                                    <td>D</td>
                                @endif
                            </div>
                        </tr>
                    </tbody>
                @endforeach
            @endif
        </table>
    </div>
</div>
@endsection
