@extends('Layouts.main')
@section('title', 'Homepage')

@section('content')
<div class="container">
    <div class="box">
        <div class="konten">
            <h1>Assignment II Web Programing LA01</h1>
            <h3>by Leonardo Caprio</h3>
        </div>
        <div class="konten1">
            <div class="konten1.1">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">Key</th>
                            <th scope="col">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>GPA</th>
                            <td>{{$gpa}}</td>
                        </tr>
                        <tr>
                            <th>SKS</th>
                            <td>{{$sks}}</td>
                        </tr>
                        <tr>
                            <th>Community Service</th>
                            <td>{{$comserv}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="konten1.2">
                <img src={{$picture}} alt="" width="200">
            </div>
            <div class="konten1.3">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">Key</th>
                            <th scope="col">Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <td>{{$name}}</td>
                        </tr>
                        <tr>
                            <th>NIM</th>
                            <td>{{$nim}}</td>
                        </tr>
                        <tr>
                            <th>Class</th>
                            <td>{{$class}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$email}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
