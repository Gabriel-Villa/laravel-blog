@extends('admin/layouts/app')


@section('main-content')
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <!-- form start -->
                    <form role="form">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="name">Category Title</label>
                                        <input type="text" class="form-control" id="tag" name="tag"
                                            placeholder="Sub Title">
                                    </div>
                                    <div class="form-group">
                                        <label for="slug">Category Slug</label>
                                        <input type="text" class="form-control" id="slug" name="slug"
                                            placeholder="Slug">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.col-->

        </div>
        <!-- ./row -->
    </section>
</div>
@endsection