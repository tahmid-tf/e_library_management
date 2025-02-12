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
                        <div class="card-header">Add Books</div>
                        <div class="card-body">


                            @if(session('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif

                            <form action="{{ route('book.store') }}" method="post">
                                {{ csrf_field() }}

                                <div class="row gx-3 mb-3">
                                    <!-- Book Title -->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputTitle">Book Title</label>
                                        <input class="form-control" id="inputTitle" type="text"
                                               placeholder="Enter book title" name="title" value="{{ old('title') }}"
                                               required/>


                                        @error('title')
                                        <br>
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror

                                    </div>

                                    <!-- Author -->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputAuthor">Author</label>
                                        <input class="form-control" id="inputAuthor" type="text"
                                               placeholder="Enter author's name" required name="author"
                                               value="{{ old('author') }}"/>

                                        @error('author')
                                        <br>
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row gx-3 mb-3">
                                    <!-- ISBN -->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputISBN">ISBN</label>
                                        <input class="form-control" id="inputISBN" type="text" placeholder="Enter ISBN"
                                               required name="isbn" value="{{ old('isbn') }}"/>

                                        @error('isbn')
                                        <br>
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Category -->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputCategory">Category</label>
                                        <input class="form-control" id="inputCategory" type="text"
                                               placeholder="Enter category" required name="category"
                                               value="{{ old('category') }}"/>

                                        @error('category')
                                        <br>
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row gx-3 mb-3">
                                    <!-- Description -->
                                    <div class="col-md-12">
                                        <label class="small mb-1" for="inputDescription">Description</label>
                                        <textarea class="form-control" id="inputDescription" rows="3"
                                                  placeholder="Enter book description"
                                                  name="description">{{ old('description') }}</textarea>

                                        @error('description')
                                        <br>
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row gx-3 mb-3">
                                    <!-- Cover Image -->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputCoverImage">Cover Image Link From Google
                                            Drive</label>
                                        <input class="form-control" id="inputCoverImage" type="text"
                                               name="cover_image_link" value="{{ old('cover_image_link') }}"/>

                                        @error('cover_image_link')
                                        <br>
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- File Upload -->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputFile">Book File Link From Google
                                            Drive</label>
                                        <input class="form-control" id="inputFile" type="text" name="book_file_link"
                                               value="{{ old('book_file_link') }}"/>
                                        @error('book_file_link')
                                        <br>
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row gx-3 mb-3">
                                    <!-- Publisher -->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputPublisher">Publisher</label>
                                        <input class="form-control" id="inputPublisher" type="text"
                                               placeholder="Enter publisher's name" name="publisher"
                                               value="{{ old('publisher') }}"/>
                                        @error('publisher')
                                        <br>
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Edition -->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputEdition">Edition</label>
                                        <input class="form-control" id="inputEdition" type="text"
                                               placeholder="Enter edition" name="edition" value="{{ old('edition') }}"/>
                                        @error('edition')
                                        <br>
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row gx-3 mb-3">
                                    <!-- Total Copies -->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputTotalCopies">Total Copies</label>
                                        <input class="form-control" id="inputTotalCopies" type="number" min="1"
                                               value="1" required name="total_copies"/>
                                        @error('total_copies')
                                        <br>
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Available Copies -->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputAvailableCopies">Available Copies</label>
                                        <input class="form-control" id="inputAvailableCopies" type="number" min="1"
                                               value="1" required name="available_copies"/>
                                        @error('available_copies')
                                        <br>
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Submit button -->
                                <button class="btn btn-primary" type="submit">Add Book</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
