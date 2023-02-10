@include('layouts.header')
<!-- BEGIN .main-heading -->
<header class="main-heading">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                <div class="page-icon">
                    <i class="icon-text"></i>
                </div>
                <div class="page-title">
                    <h3>Edit Blogs</h3>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                <div class="daterange-container">
                    <a data-toggle="tooltip" class="btn btn-primary btn-sm btn-create"
                        href="{{ route('blogs.index') }}"><i class="icon-eye"></i> View</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END: .main-heading -->
<!-- BEGIN .main-content -->

<div class="main-content">
    <form action="{{ route('blogs.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        @if ($errors->any())
            <div class="validation error">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true" id="cross">×</span></button>
                <i class="icon-warning2"></i><strong>Oh snap!</strong><br>
                @foreach ($errors->all() as $error)
                    {{ $error }}<br />
                @endforeach
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                <div class="row gutters">
                    <div class="col-md-8 col-12">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Blog Title</label>
                            <input type="text" name="title" value="{{ $blog->title }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter title...">
                        </div>
                    </div>
                    <div class="col-md-4 col-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Blog Author</label>
                            <input type="text" name="author" value="{{ $blog->author }}" class="form-control" placeholder="Enter author name">
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Thumbnail Image</label>
                            <input type="file" name="thumbnail_img" class="form-control" placeholder="Enter author name">
                        </div>
                    </div>
                    <div class="col-md-1 col-6">
                        <img src="{{ asset('assets/blogs/'.$blog->thumbnail_img) }}" alt="" width="80">
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Banner Image</label>
                            <input type="file" name="banner_img" class="form-control" placeholder="Enter author name">
                        </div>
                    </div>
                    <div class="col-md-1 col-6">
                        <img src="{{ asset('assets/blogs/'.$blog->banner_img) }}" alt="" width="80">
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Detail Image</label>
                            <input type="file" name="detail_img" class="form-control" placeholder="Enter author name">
                        </div>
                    </div>
                    <div class="col-md-1 col-6">
                        <img src="{{ asset('assets/blogs/'.$blog->detail_img) }}" alt="" width="80">
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Short Description</label>
                            <textarea class="form-control" name="short_description" id="exampleFormControlTextarea1" rows="3">{{ $blog->short_description }}</textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Long Description</label>
                            <textarea class="form-control" name="long_description" id="exampleFormControlTextarea1" rows="3">{{ $blog->long_description }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="actions clearfix">
                    <button type="submit" class="btn btn-primary"><span class="icon-save2"></span>
                            Save
                    </button>
                </div>
            </div></div>
    </form>
</div>
<!-- END: .main-content -->
@include('layouts.footer')