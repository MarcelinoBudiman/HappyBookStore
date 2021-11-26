@extends('layout')
@section('row-section')
    <div class="col-8">
        <div class="bg-warning p-1 fs-2">
            Book Detail
        </div>
        <table class="table">
            <tbody>
                <tr><td>Title: {{$bookData[0]->title}}</td></tr>
                <tr><td>Author: {{$bookData[0]->details->author}}</td></tr>
                <tr><td>Publisher: {{$bookData[0]->details->publisher}}</td></tr>
                <tr><td>Year: {{$bookData[0]->details->year}}</td></tr>
                <tr><td>Description : <br> {{$bookData[0]->details->description}}</td></tr>
            </tbody>
        </table>
    </div>
@endsection
