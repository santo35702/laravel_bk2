<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Carousel</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.carousel.index') }}">Carousel</a></li>
                        <li class="breadcrumb-item active">Update</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form wire:submit.prevent="updateItem" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12">
                        @if (session('status'))
                            <div class="alert alert-success text-uppercase alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                        @endif
                        <div class="card card-secondary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Carousel Information <small class="ml-2"><b class="badge badge-danger mr-1">Note:</b> All <span class="text-danger fa-2x">*</span> marks must fill required.</small></h3>
                                <div class="card-tools">
                                    <a href="{{ route('admin.carousel.index') }}" class="btn btn-sm btn-info"><i class="fas fa-undo"></i></a>
                                    <button type="button" class="btn btn-tool" data-card-widget="maximize" title="Expand">
                                        <i class="fas fa-expand"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title <span class="text-danger">*</span></label>
                                    <input type="text" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Enter Carousel Title" wire:model="title">
                                    @error ('title')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="subtitle">Sub-Title <span class="text-danger">*</span></label>
                                    <input type="text" id="subtitle" class="form-control @error('subtitle') is-invalid @enderror" placeholder="Enter Carousel Sub-Title" wire:model="subtitle">
                                    @error ('subtitle')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="link">Link <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error ('link') is-invalid @enderror" id="link" placeholder="Enter Carousel Image Link" wire:model="link">
                                    @error ('link')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="custom-file mb-3">
                                        <label for="image" class="custom-file-label">Carousel Image <span class="text-danger">*</span></label>
                                        <input type="file" class="custom-file-input" id="image" wire:model="newImage">
                                        @error ('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror

                                        @if ($newImage)
                                            <img src="{{ $newImage->temporaryUrl() }}" alt="Carousel Image" class="img-fluid img-thumbnail" width="100">
                                        @else
                                            <img src="{{ asset('assets/images/slideshow-banners/' . $image) }}" alt="Carousel Image" class="img-fluid img-thumbnail" width="100">
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status <span class="text-danger">*</span></label>
                                    <select class="custom-select select2 @error ('status') is-invalid @enderror" id="status" required wire:model="status">
                                        <option>Select Status...</option>
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                    </select>
                                    @error ('status')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-12">
                        <div class="form-group">
                            <a href="{{ route('admin.carousel.index') }}" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-sm btn-success float-right">Submit</button>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </form>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@push('script')
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('admin/dist/js/demo.js') }}"></script>
@endpush

@push('script1')
    <!-- Page specific script -->
    <script>
      $(function () {
        //Initialize Select2 Elements
        $('.select2').select2({
            placeholder: 'Select an Option',
        });
      })
    </script>
@endpush
