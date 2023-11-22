@extends('auth.layouts')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Sertifikat</div>
                    <div class="card-body">
                        <!-- Formulir Edit -->
                        <form method="POST" action="{{ route('gallery.update', $gallery->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Input Nama, Deskripsi, dll. -->
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $gallery->title }}" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" rows="4" required>{{ $gallery->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="picture">Picture</label>
                                <input type="file" class="form-control" id="picture" name="picture">
                            </div>

                            <!-- Tombol Simpan -->
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>

                        <!-- Tombol Batal -->
                        <a href="{{ route('gallery.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
