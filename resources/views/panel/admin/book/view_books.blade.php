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
                                Add Book
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
                        <div class="card-header">View All Books</div>
                        <div class="card-body">

                            <table id="datatablesSimple">
                                <thead>
                                <tr>
                                    <th>Serial</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>ISBN</th>
                                    <th>Category</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>

                                <tbody>

                                <?php $id = 0; ?>
                                @foreach($books as $book)

                                    <tr>
                                        <td>{{ $id+=1 }}</td>
                                        <td>{{ $book->title }}</td>
                                        <td>{{ $book->author }}</td>
                                        <td>{{ $book->isbn }}</td>
                                        <td>{{ $book->category }}</td>
                                        <td>
                                            <button class="btn btn-outline-primary">Update</button>
                                        </td>

                                        <td>
                                            <button class="btn btn-outline-danger">Delete</button>
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
    </main>
@endsection
