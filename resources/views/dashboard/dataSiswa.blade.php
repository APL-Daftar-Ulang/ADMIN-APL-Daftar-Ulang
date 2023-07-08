@extends('dashboard.layout.app')
@section('content')
<div class="main">
    <div class="card mb-0">
        <div class="card-body content-min-height">
            <div class="container">
                <div class="mx-auto my-2" style="max-width: 1000px;">
                    <div class="container">
                        <div class="d-flex justify-content-between align-items-center  mb-3">
                            <h4>Data Siswa</h4>
                            <div class="d-flex justify-content-end mb-3 gap-3">
                              {{-- <button class="btn btn-primary mr-2">Import</button> --}}
                              <button class="btn btn-primary">Tambah Data</button>
                            </div>
                        </div>
                       
                        <table class="table">
                            <thead class="thead-light">
                              <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Telp</th>
                                <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>John Doe</td>
                                <td>Jl. Contoh No. 123</td>
                                <td>12A</td>
                                <td>08123456789</td>
                                <td>
                                  <button class="btn btn-primary btn-sm">Edit</button>
                                  <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Jane Smith</td>
                                <td>Jl. Contoh No. 456</td>
                                <td>10B</td>
                                <td>08765432100</td>
                                <td>
                                  <button class="btn btn-primary btn-sm">Edit</button>
                                  <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                              </tr>
                              <!-- Tambahkan siswa lainnya sesuai kebutuhan -->
                            </tbody>
                          </table>
                          
                      </div>
                      
                </div>
            </div>
        </div>
    </div>
</div>
@endsection