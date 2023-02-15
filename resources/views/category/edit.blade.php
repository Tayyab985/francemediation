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
                    <h3>Edit Category</h3>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                <div class="daterange-container">
                    <a data-toggle="tooltip" class="btn btn-primary btn-sm btn-create"
                        href="{{ route('categories.index') }}"><i class="icon-eye"></i> View</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- END: .main-heading -->
<!-- BEGIN .main-content -->

<div class="main-content">
    <form action="{{ route('sub_categories.update',$category->id) }}" method="POST">
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
                    <div class="col-4">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Category Title</label>
                            <input type="text" name="title" value="{{ $category->title }}" class="form-control" id="exampleFormControlInput1" placeholder="Enter title...">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                    </div>
                    <div class="col-2">
                        <img src="{{ asset('assets/category/'.$category->image) }}" alt="" width="90" class="img-fluid">
                    </div>
                </div>
                <div class="actions clearfix">
                    <button type="submit" class="btn btn-primary"><span class="icon-save2"></span>
                            Update
                    </button>
                </div>
            </div></div>
    </form>
</div>
<!-- END: .main-content -->
@include('layouts.footer')