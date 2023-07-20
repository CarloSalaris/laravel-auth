@extends('layouts.app')

@section('content')
    <div class="container text-center">

        <h1>Projects list</h1>

        <div class="row justify-content-center">
            <div class="col col-md-6 ">
                <ul class="list-unstyled">
                    @foreach ($projects as $project)
                        <li>
                            <div class="border p-3 my-3">
                                <a class="text-decoration-none" href="#">{{ $project->title }}</a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
@endsection
