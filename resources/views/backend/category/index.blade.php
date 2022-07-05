@extends('backend.master')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <p class="card-title">Data Category</p>
                <a href="{{ route('category-create') }}" class="btn btn-info btn-icon-text mb-3 btn-sm">
                    <i class="mdi mdi-library-plus btn-icon-append"></i>
                    Tambah Data
                </a>
                <div class="table-responsive pt-3">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Category</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_category as $categorys => $category)
                                <tr>
                                    <td>{{ $categorys + $data_category->firstitem() }}</td>
                                    <td>{{ $category->category }}</td>
                                    <td class="">
                                        <a href="{{ route('category-edit', $category->id) }}"
                                            class="btn btn-warning btn-icon-text mr-2 btn-sm">
                                            <i class="mdi mdi-border-color"></i>

                                        </a>

                                        <form action="{{ route('category-delete', $category->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-icon-text btn-sm">
                                                <i class="mdi mdi-delete"></i>

                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
