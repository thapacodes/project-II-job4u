@extends('layouts.admin')
@section('page-title')
    <title>Job4u : Jobs in design, marketing, programming, teaching ...</title>
@stop
@section('content')
    <div>
        @if (Auth::user())
            @if (Auth::user()['role'] == 'employeer')
            <h3 class="mb-3">Employer's Dashboard</h3>
                <div class="row">
                    <div class="col-4">
                        <div class="card rounded-0">
                            <div class="card-body">
                                
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @else
        <script>
            window.location = "{{ route('login') }}";
        </script>
        @endif
    </div>
@stop
