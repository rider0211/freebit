@include('common.header')
        
    <section class="padding-bottom">
        <!--   Big container   -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12" style="padding-top:30px">
                    <div class="call-to-action featured featured-primary mb-5" style="display:block !important;">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <form class="csv-form" action="{{route('csv_register')}}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @if (count($errors) > 0)
                                                <div class = "alert alert-danger alert-dismissible fade show">
                                                <div class="alert-body">
                                                    <ul class="mb-0">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                    </ul>
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                            @endif
                                            @if (\Session::has('success'))
                                                <div class="alert alert-success alert-dismissible fade show">
                                                    <div class="alert-body">
                                                        {{ \Session::get('success') }}
                                                    </div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                </div>
                                            @endif

                                            <div class="row">
                                                <div class="form-group col-sm-12 col-lg-6">
                                                    <label class="form-label mb-1 text-2">Please select a CSV file</label>
                                                    <input type="file" name="csv_file" class="form-control text-3 h-auto py-2" required="">
                                                </div>
                                                <div class="form-group col-sm-12 col-lg-6">
                                                    <label class="form-label mb-1 text-2">Wallet Address</label>
                                                    <input type="text" name="wallet_address" class="form-control text-3 h-auto py-2" required="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-sm-12 col-lg-12">
                                                    <label class="form-label mb-1 text-2">Value</label>
                                                    <input type="text" name="dvalue" class="form-control text-3 h-auto py-2" required="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col">
                                                    <input type="submit" value="BATCH REGISTER" class="btn btn-primary">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table id="statistics" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Domain Name</th>
                                    <th>Wallet Address</th>
                                    <th>Value</th>
                                    <th>Requested Date</th>
                                    <th>Status</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($logs as $row)
                                <tr>
                                    <td>{{$row->name}}.bit</td>
                                    <td>{{$row->wallet}}</td>
                                    <td title="{{$row->dvalue}}">{{empty($row->dvalue) ? '' : substr($row->dvalue, 0, 25).'...'}}</td>
                                    <td>{{$row->created_at}}</td>
                                    <td>{{$row->status==0?'Queued':($row->status==2?'Pending':($row->status==4?'Error':'Approved'))}}</td>
                                    <td>{{$row->description}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- end row -->
        </div> <!--  big container -->
    </section>
@include('common.footer')
