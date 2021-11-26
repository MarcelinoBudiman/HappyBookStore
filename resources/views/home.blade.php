@extends('layout')
@section('row-section')
    <div class="col-8">
        <div class="bg-warning p-1 fs-2">
            Book List
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
            </tbody>
        </table>
            {{ $bookData->links() }}
    </div>
@endsection
