@extends('panel.admin_master')

@section('content')
    <main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
            <div class="container-xl px-4">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="user-plus"></i></div>
                                Import Books
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-xl px-4 mt-4">
            <div class="row">
                <div class="col-xl-12">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">Import Books [Excel File]</div>
                        <div class="card-body">

                            <p style="font-weight: bold">Please ensure that the file type is an Excel file (.xlsx) and
                                that all ISBN data is unique; otherwise, the data import will fail.</p>
                            <p style="font-weight: bold">Please <a
                                    href="{{ asset('excel_file_demo/books.xlsx') }}" download>click here</a> to
                                get a fresh copy of excel file</p>
                            <hr>

                            @if(session('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-danger">
                                    {!! session('error') !!}
                                </div>
                            @endif

                            <form action="{{ route('books.import') }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="row gx-3 mb-3">

                                    <!-- File Upload -->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputFile">Import Files
                                            Drive</label>
                                        <input class="form-control" id="inputFile" type="file" name="excel_file"/>
                                        @error('book_file_link')
                                        <br>
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>


                                <!-- Submit button -->
                                <button class="btn btn-primary" type="submit">Import Books</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
