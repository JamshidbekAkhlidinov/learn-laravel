@php
    use   Illuminate\Pagination\Paginator;

/**
 * @var $categories App\Models\NewsCategory
 * @var $category App\Models\NewsCategory
 */
@endphp

@extends('layouts.app')


@section('content')
    <h2>
        News Category
    </h2>


    <a href="{{ route('news-category.create') }}" class="btn btn-success">
        create
    </a>

    <a href="{{ route('news-category.update') }}" class="btn btn-primary">
        update
    </a>

    <a href="{{ route('news-category.view') }}" class="btn btn-info">
        view
    </a>

    <a href="{{ route('news-category.delete') }}" class="btn btn-danger">
        delete
    </a>

    <table class="mt-3 table table-bordered table-striped">
        <tr>
            <th>
                Nr
            </th>
            <th>Name</th>
        </tr>
        @foreach($categories as $category)
            <tr>
                <td>
                    {{ $loop->index + 1 }}
                </td>
                <td>
                    {{ $category->name }}
                </td>
            </tr>
        @endforeach

    </table>

    {{ $categories->links(Paginator::useBootstrap()) }}


@endsection
