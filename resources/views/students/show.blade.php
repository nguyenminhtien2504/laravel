@extends('admin-layout.master')

@section('title','chi tiết sinh viên')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
          <div class="col-sm-6">
            <h1>danh sách </h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
    <table border='1' class='table'>
        <thead>
            <th>Name</th>
            <th>Phone</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Active</th>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td><a href="/students/{{$student->id}}">{{$student->name}}</a></td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->age }} </td>
                    <td>
                        @if ($student->gender == 0)
                            Female
                        @elseif ($student->gender == 1)
                            Male
                        @else
                            Nothing
                        @endif
                    </td>
                    <td>{{ $student->address }}</td>
                    <td>{{ $student->is_active == 1 ? 'Yes' : 'No' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
          </div>
        </div>
    </div>

@endsection
