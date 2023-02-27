@include('common.header')
        
    <section class="padding-bottom">
        <!--   Big container   -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12" style="padding-top:30px">
                    <div class="call-to-action featured featured-primary mb-5" style="display:block !important;">
                        <table id="statistics" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Domain Name</th>
                                    <th>Wallet Address</th>
                                    <th>Requested Date</th>
                                    <th>Rate</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($transactions as $row)
                                <tr>
                                    <td>{{$row->domain_name}}.bit</td>
                                    <td>{{$row->wallet_address}}</td>
                                    <td>{{$row->created_at}}</td>
                                    <td>{{$row->rate>0?$row->rate:""}}</td>
                                    <td>{{$row->status==0?'Queued':($row->status==1?'Pending':'Approved')}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Domain Name</th>
                                    <th>Wallet Address</th>
                                    <th>Requested Date</th>
                                    <th>Rate</th>
                                    <th>Status</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div><!-- end row -->
        </div> <!--  big container -->
    </section>
@include('common.footer')
