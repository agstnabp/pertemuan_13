@extends('auth.layouts')

@section('content')

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header"> <b>Curriculum Vitae </b></div>
            <div class="card-body">

                <h5>Nama</h5>
                <div class="col-md-6">
                    <p>Nama: Agustina Bayu Pramesti</p>
                    <p>Alamat: Jalan Kaliurang Km. 7</p>
                    <p>Email: agustinna137@gmail.com</p>
                </div>

                <br>

                <h5>Bio</h5>
                <div class="col-md-10">
                    <p>I am a software engineer with over 8 years’ experience working on complex software development initiatives.I’m passionate about software development.</p>
                </div>

                <br>

                <h5>Pendidikan</h5>
                <h6>Universitas Gadjah Mada</h6>
                <p>Jurusan: Teknologi Rekayasa Perangkat Lunak</p>
                <p>Status pendidikan: Belum Lulus</p>
                <h6>SMK Negeri 2 Surakarta</h6>
                <p>Jurusan: Rekayasa Perangkat Lunak</p>
                <p>Status pendidikan: Lulus (2022)</p>

                <br>

                <h5>Pengalaman Organisasi</h5>
                <h6>Rafoundy</h6>
                <p>Sebagai aktivis</p>
                <p>2021-sekarang</p>
                <h6>Girl Up</h6>
                <p>Sebagai Desainer Visual Unit</p>
                <p>2022</p>

                <br>

                <h5>Pengalaman Kerja</h5>
                <h6>Matras Yoga Wijaya</h6>
                <p>Jabatan: Business owner</p>
                <p>2021-2023</p>
                <h6>Cv. Manunggal Mandiri</h6>
                <p>Jabatan: Sekertaris</p>
                <p>2020-2021</p>

                <br>
                <h5>Hobi</h5>
                <p>Membaca</p>
                <p>Menulis</p>

                <br>

                <h5>Sertifikat</h5>
                <!-- New Gallery Button -->
                <a href="{{ route('gallery.create') }}" class="btn btn-dark mb-3">Upload Here!</a>

                <!-- Gallery Loop -->
                @if(count($galleries) > 0)
                    @foreach ($galleries as $gallery)
                        <div class="col-sm-2">
                            <div>
                                <a class="example-image-link" href="{{ asset('storage/posts_image/'.$gallery['picture']) }}" data-lightbox="roadtrip" data-title="{{ $gallery['description']}}">
                                    <img class="example-image img-fluid mb-2" src="{{ asset('storage/posts_image/'.$gallery['picture']) }}" alt="image-1" />
                                </a>
                                        <div class="mt-2">
                                            <!-- Edit Button -->
                                            <a href="{{ route('gallery.edit', $gallery['id']) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit </a>
                                            <!-- Delete Button -->
                                            <form action="{{ route('gallery.destroy', $gallery['id']) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this photo?')">Delete</button>
                                            </form>            
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>Tidak ada data.</p>
                @endif

                <div class="d-flex mt-3">
                    {{-- {{ $galleries->links() }} --}}
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
