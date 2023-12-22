@extends('layout.master')
@section('title', 'Import File')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Table</h3>
        </div>
        <div class="card-body">
            <div class="d-flex gap-2 mb-2">
                <a href="{{ route('karyawan.get.export')}}" class="btn btn-success">Export</a>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalImport">Import</button>
            </div>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Place, Date of birth</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Position</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->place_of_birth }}, {{ $item->date_of_birth }}</td>
                            <td>{{ $item->gender }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->position }}</td>
                            <td>
                                <form action="" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm"><i
                                            class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="ModalImport" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('karyawan.post.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="import" class="mb-2">Import from Excel</label>
                            <input type="file" name="import" id="import" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Import</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
