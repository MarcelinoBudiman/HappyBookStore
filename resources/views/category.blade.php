@extends('layout')
@section('row-section')
@if ($bookData->isempty())
    <div class="col-8">
        <div class="bg-warning p-1 fs-2">
            No data found..
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="bg-warning">No data...</td>
                    <td class="bg-warning"></td>
                </tr>
            </tbody>
        </table>
    </div>
@else
    <div class="col-8">
        <div class="bg-warning p-1 fs-2">
            {{$bookData[0]->categories->category}}
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < count($bookData); $i++)
                    <tr>
                        <td><a href="/details/{{$bookData[$i]->id}}" class="text-decoration-none text-dark">{{$bookData[$i]->title}}</a></td>
                        <td>{{$bookData[$i]->details->author}}</td>
                    </tr>
                @endfor
                    <tr>
                        <td> </td>
                        <td class="d-flex justify-content-end">{{ $bookData->links() }}</td>
                    </tr>
            </tbody>
        </table>
    </div>
@endif
@endsection
