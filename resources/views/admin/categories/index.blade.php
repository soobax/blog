@extends('layouts.app')

@section('content')

<div class="card card-default">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>
                    Category Name
                </th>
                <th>
                    Edit
                </th>
                <th>
                    Delete
                </th>
            </thead>
            <tbody>
                @foreach ($categories as $category)
    
                    <tr>
                        <td>
                            {{ $category->name }}
                        </td>
                        <td>
                            <a href="{{ route('category.edit', ['id' => $category->id ])}}" class="btn btn-xs btn-info">
                                <i class="fa fa-pencil"></i>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('category.delete', ['id' => $category->id ])}}" class="btn btn-xs btn-danger">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                    
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop