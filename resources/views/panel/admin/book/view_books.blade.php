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
                                View All Books
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

                        <div>
                            <div class="card-header">View All Books</div>
                        </div>

                        <div class="card-body">

                            @if(session('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif

                            <button id="selectAll" class="btn btn-primary mb-2">Select All</button>
                            <button id="bulkDeleteBtn" class="btn btn-danger mb-2">Delete</button>

                            <table id="datatablesSimple">
                                <thead>
                                <tr>
                                    <th>Check</th>
                                    <th>Serial</th>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>ISBN</th>
                                    <th>Category</th>
                                    <th>Tags</th>
                                    <th>Update</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php $id = 0; @endphp
                                @foreach($books as $book)
                                    <tr>
                                        <td><input type="checkbox" class="bulkCheckbox" value="{{ $book->id }}"></td>
                                        <td>{{ ++$id }}</td>
                                        <td>{{ $book->title }}</td>
                                        <td>{{ $book->author }}</td>
                                        <td>{{ $book->isbn }}</td>
                                        <td>{{ $book->category }}</td>
                                        <td>{{ $book->book_tags }}</td>
                                        <td>
                                            <a class="btn btn-outline-primary"
                                               href="{{ route('book.edit', $book->id) }}">Update</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <script>
                            document.addEventListener("DOMContentLoaded", function () {
                                // Select All Button Click
                                document.getElementById("selectAll").addEventListener("click", function () {
                                    let checkboxes = document.querySelectorAll(".bulkCheckbox");
                                    let allChecked = Array.from(checkboxes).every(checkbox => checkbox.checked);
                                    checkboxes.forEach(checkbox => checkbox.checked = !allChecked);
                                });

                                // Bulk Delete Button Click
                                document.getElementById("bulkDeleteBtn").addEventListener("click", function () {
                                    let selectedIds = [];
                                    document.querySelectorAll(".bulkCheckbox:checked").forEach(checkbox => {
                                        selectedIds.push(checkbox.value);
                                    });

                                    if (selectedIds.length === 0) {
                                        alert("Please select at least one record to delete.");
                                        return;
                                    }

                                    if (confirm("Are you sure you want to remove all selected books?")) {
                                        fetch("{{ route('books.bulk_delete') }}", {
                                            method: "POST",
                                            headers: {
                                                "Content-Type": "application/json",
                                                "X-CSRF-TOKEN": "{{ csrf_token() }}"
                                            },
                                            body: JSON.stringify({book_ids: selectedIds})
                                        })
                                            .then(response => response.json())
                                            .then(data => {
                                                if (data.success) {
                                                    alert("Selected books have been deleted.");
                                                    location.reload();
                                                } else {
                                                    alert("Error deleting records.");
                                                }
                                            })
                                            .catch(error => console.error("Error:", error));
                                    }
                                });
                            });
                        </script>


                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
