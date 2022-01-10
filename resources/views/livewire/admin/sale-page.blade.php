<div class="content-wrapper">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Manage Sale Timer</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Manage Sale</li>
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
                    @if (session('status'))
                        <div class="alert alert-success text-uppercase alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                    @endif
                    {{-- <div class="card card-success card-outline shadow">
                        <div class="card-header">
                            <h3 class="card-title">New Arrival Categories List</h3>
                            <div class="card-tools">
                                <a href="#" class="btn btn-sm btn-primary"><i class="fas fa-sync"></i></a>
                                <button type="button" class="btn btn-tool" data-card-widget="maximize" title="Expand">
                                    <i class="fas fa-expand"></i>
                                </button>
                            </div>
                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success text-uppercase alert-dismissible fade show" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                </div>
                            @endif
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Slug</th>
                                        <th>Description</th> --}}
                                        {{-- <th>Action</th> --}}
                                    {{-- </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $sl = 1;
                                    @endphp
                                    @foreach ($new_arrival as $key)
                                        <tr>
                                            <td>{{ $sl++ }}</td>
                                            <td>{{ $key->name }}</td>
                                            <td>{{ $key->slug }}</td>
                                            <td>{{ $key->description }}</td>
                                            {{-- <td class="d-flex justify-content-center align-items-center">
                                                <a href="{{ route('admin.categories.edit', $key->id) }}" class="btn btn-info btn-sm mr-1"><i class="fas fa-edit"></i></a>
                                                <a href="#" onclick="confirm('Are you sure, you want to Delete?') || event.stopImmediatePropagation()" class="btn btn-danger btn-sm" wire:click.prevent="deleteItem('{{ $key->id }}')"><i class="fas fa-trash"></i></a>
                                            </td> --}}
                                        {{-- </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card --> --}}
                    <form wire:submit.prevent="updateSale">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Update Sale</h3>
                                <div class="card-tools">
                                    <a href="{{ route('admin.dashboard') }}" class="btn btn-sm btn-info"><i class="fa fa-undo"></i></a>
                                    <button type="button" class="btn btn-tool" data-card-widget="maximize" title="Expand">
                                        <i class="fas fa-expand"></i>
                                    </button>
                                </div>
                                <!-- /.card-tools -->
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <div class="input-group date" id="datepicker" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#datepicker" id="datepicker" wire:model="sale_date"/>
                                        <div class="input-group-append" data-target="#datepicker" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="custom-select" id="status" name="status" wire:model="status">
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <div class="form-group">
                            <a href="#" class="btn btn-secondary">Cancel</a>
                            <button type="submit" class="btn btn-success float-right">Save Changes</button>
                        </div>
                    </form>
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
    <script src="{{ asset('admin/dist/js/demo.js') }}"></script>
    <!-- InputMask -->
    <script src="{{ asset('admin/plugins/moment/moment.min.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
@endpush

@push('script1')
    <!-- Page specific script -->
    <script>
      $(function () {
          //Date picker
          $('#datepicker').datetimepicker({
              format: 'Y-M-D H:M:S A',
              viewMode: 'years',
              daysOfWeekDisabled: [0, 6]
          })
          .on('dp.change', function (ev) {
              var data = $('#datepicker').val();
              @this.set('sale_date', data);
          });
      })
    </script>
@endpush
