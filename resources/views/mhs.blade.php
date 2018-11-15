@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Mahasiswa</h1>
            <hr>
            <form action="{{ route('mahasiswa.store') }}" method="post">
            
                {{ csrf_field() }} 
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="usr" name="nama">
                    <label for="nama">Email:</label>
                    <input type="text" class="form-control" id="usr" name="email">
                    <label for="nama">Username:</label>
                    <input type="text" class="form-control" id="usr" name="username">
                    <label for="nama">Password:</label>
                    <input type="text" class="form-control" id="usr" name="password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection