<div class="content-wrapper">

    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Products</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.products.index') }}">Products</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Update Products <small class="ml-2"><b class="badge badge-danger mr-1">Note:</b> All <span class="text-danger fa-2x">*</span> marks must fill required.</small></h3>
                            <div class="card-tools">
                                <a href="{{ route('admin.products.index') }}" class="btn btn-sm btn-info">Products</a>
                                <button type="button" class="btn btn-tool" data-card-widget="maximize" title="Expand">
                                    <i class="fas fa-expand"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form wire:submit.prevent="updateItem" enctype="multipart/form-data">
                                @if (session('status'))
                                    <div class="alert alert-success text-uppercase alert-dismissible fade show" role="alert">
                                        {{ session('status') }}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                @endif

                                @error ('slug')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <div class="row">
                                    <div class="col-6">
                                        <h4>Products Information</h4>
                                        <div class="form-group">
                                            <label for="title">Title <span class="text-danger">*</span></label>
                                            <input type="text" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Enter Product Title" wire:model="title" wire:keyup="generateSlug">
                                            @error ('title')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" wire:model="slug">
                                        </div>
                                        <div class="form-group">
                                            <label for="short_description">Short Description <span class="text-danger">*</span></label>
                                            <textarea rows="8" class="form-control @error('short_description') is-invalid @enderror summernote" id="short_description" wire:model="short_description"></textarea>
                                            @error ('short_description')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="regular_price">Regular Price <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control @error ('regular_price') is-invalid @enderror" id="regular_price" placeholder="Enter Product Regular Price" wire:model="regular_price">
                                            @error ('regular_price')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-file">
                                                <label for="image" class="custom-file-label">Product Image <span class="text-danger">*</span></label>
                                                <input type="file" class="custom-file-input" id="image" wire:model="newImage">
                                                @error ('image')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror

                                                @if ($newImage)
                                                    <img src="{{ $newImage->temporaryUrl() }}" alt="Product Image" class="img-fluid img-thumbnail" width="100">
                                                @else
                                                    <img src="{{ asset('assets/images/product-images/' . $image) }}" alt="Product Image" class="img-fluid img-thumbnail" width="100">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="category">Category <span class="text-danger">*</span></label>
                                            <select class="custom-select select2 @error ('category') is-invalid @enderror" id="category" required wire:model="category">
                                                <option>Select Category...</option>
                                                @foreach (\App\Models\Category::orderBy('name', 'ASC')->get() as $key)
                                                    <option value="{{ $key->id }}">{{ $key->name }}</option>
                                                @endforeach
                                            </select>
                                            @error ('category')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h4>Others Information</h4>
                                        <div class="form-group">
                                            <label for="description">Description <span class="text-danger">*</span></label>
                                            <textarea class="form-control @error('description') is-invalid @enderror summernote" id="description" wire:model="description"></textarea>
                                            @error ('description')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="sale_price">Sale Price</label>
                                            <input type="number" class="form-control" id="sale_price" placeholder="Enter Product Sale Price" wire:model="sale_price">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label for="stock" class="input-group-text">Stock Status</label>
                                            </div>
                                            <select class="custom-select" id="stock" wire:model="stock_status">
                                                <option value="instock">In-Stock</option>
                                                <option value="outofstock">Out of Stock</option>
                                            </select>
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <label for="featured" class="input-group-text">Featured</label>
                                            </div>
                                            <select class="custom-select" id="featured" wire:model="featured">
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="quantity">Quantity <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error ('quantity') is-invalid @enderror" id="quantity" placeholder="Enter Products Quantity" wire:model="quantity">
                                            @error ('quantity')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <label for="sku" class="input-group-text">SKU <span class="text-danger">*</span></label>
                                            </div>
                                            <input type="text" class="form-control @error ('sku') is-invalid @enderror" id="sku" placeholder="Enter Products SKU" wire:model="sku">
                                            @error ('sku')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-sm btn-success float-right">Update</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@push('script')
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admin/dist/js/demo.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
@endpush

@push('script1')
    <!-- Page specific script -->
    <script>
      $(function () {
        // Summernote
        $('.summernote').summernote({
            placeholder: 'Enter Description',
            tabsize: 2,
            height: 150,   //set editable area's height
            // fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Merriweather'],
            // fontNamesIgnoreCheck: ['Merriweather'],
            // lineHeights: ['0.2', '0.3', '0.4', '0.5', '0.6', '0.8', '1.0', '1.2', '1.4', '1.5', '2.0', '3.0']
        });
        $('.select2').select2({
            placeholder: 'Select an Option',
        });
      })
    </script>
@endpush
