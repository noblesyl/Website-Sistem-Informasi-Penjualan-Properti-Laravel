@extends('backend.master')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Category</h4>

                <form class="forms-sample" method="POST" action="{{ route('category-update', $data_category->id) }}">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="exampleSelectGender">Category</label>
                        <select class="form-control" id="exampleSelectGender" name="category">
                            <option @if ($data_category->category) selected @endif value="perumahan">Perumahan</option>
                            <option @if ($data_category->category) selected @endif value="apartemen">Apartemen</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>

                    <a href="{{ route('category-index') }}" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
    </div>
@endsection
