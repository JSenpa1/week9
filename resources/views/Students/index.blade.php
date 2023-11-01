@extends('layout.app')

@section('content')
    <center><h1>Data Mahasiswa</h1></center>
@stop

@section('css')
    @parent
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('footer')
    <table class="table table-striped" id="example">
    <thead>
        <th>ID</th>
        <th>Nama</th>
        <th>Prodi</th>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
                <td>00{{ $student->id }}</td>
                <td>{{ $student->nama }}</td>
                <td>{{ $student->prodi }}</td>
            </tr>
        @endforeach
    </tbody>
    </table>
@stop

@section('js')
    @parent
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        new DataTable('#example');
    </script>
@endsection
