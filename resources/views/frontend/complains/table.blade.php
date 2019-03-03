@extends('Front/layouts/master')

@section('content')
    <section class="col-md-8 ">
        <table class="table table-responsive"  id="complains-table">
            <h1 class="pull-left">All Complains</h1>
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Issue</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                @foreach($complains as $complain)
                <tr>
                    <td>{!! $complain->userName !!}</td>
                    <td>{!! $complain->issu !!}</td>
                    <td>{!! $complain->details !!}</td>
                </tr>
                 @endforeach
            </tbody>
        </table>

@endsection