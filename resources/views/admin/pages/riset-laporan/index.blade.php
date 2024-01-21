@extends('layouts.admin')

@push('style')
    <link rel="stylesheet" href="{{ asset('stisla/dist/assets/modules/datatables/datatables.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('stisla/dist/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('stisla/dist/assets/modules/datatables/Select-1.2.4/css/select.bootstrap4.min.css') }}">
@endpush

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>{{ $title }}</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">{{ $title }}</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between w-100">
                                    <h4>Daftar {{ $title }}</h4>
                                    <a href="{{ route('admin.pages.' . strtolower($url) . '.create') }}"
                                        class="btn btn-success">Tambah</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped" id="table-1">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    #
                                                </th>
                                                <th>File</th>
                                                <th>Category</th>
                                                <th>Author</th>
                                                <th>Created At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $no => $item)
                                                <tr>
                                                    <td>{{ $no + 1 }}</td>
                                                    <td><a target="blank"
                                                            href="{{ route('beranda') . '/storage/riset/' . $item->file }}">{{ $item->file }}</a>
                                                    </td>
                                                    <td>{{ $item->category }}</td>
                                                    <td>Admin</td>
                                                    <td>{{ $item->created_at }}</td>
                                                    <td>
                                                        <form
                                                            action="{{ route('admin.pages.riset-laporan.destroy', $item) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            {{-- <a href="" class="btn btn-info">View</a> --}}
                                                            <a href="{{ route('admin.pages.riset-laporan.edit', $item) }}"
                                                                class="btn btn-warning">Edit</a>
                                                            <button class="btn btn-danger">Delete</button>
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
                </div>
            </div>
        </section>
    </div>
@endsection

@push('script')
    <!-- JS Libraies -->
    <script src="{{ asset('stisla/dist/assets/modules/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('stisla/dist/assets/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}">
    </script>
    <script src="{{ asset('stisla/dist/assets/modules/datatables/Select-1.2.4/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('stisla/dist/assets/modules/jquery-ui/jquery-ui.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('stisla/dist/assets/js/page/modules-datatables.js') }}"></script>
@endpush
