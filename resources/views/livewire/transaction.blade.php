@section('title', 'Transaction')
<div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="font-weight-bold mb-3 text-center">Transaction List</h2>
                    <table class="table table-bordered table-hovered table-striped">
                        <thead>
                            <tr>    
                                <th>No</th>
                                <th>Invoice</th>
                                {{-- <th>User</th> --}}
                                <th>Product</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th>Amount</th>
                                <th>Pay</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transaction as $index=>$transaction)
                            
                            <tr>
                                
                                <td>{{$index + 1}}</td>
                                <td>{{$transaction->invoice_number}}</td>
                                {{-- <td>{{$transaction->user_id}}</td> --}}
                                <td>{{$transaction->name}}</td>
                                <td>{{$transaction->qty}}</td>
                                <td>{{$transaction->price_single}}</td>
                                <td>{{$transaction->price}}</td>
                                <td>{{$transaction->pay}}</td>
                                <td>{{$transaction->total}}</td>
                                <td>
                                    <div class="row">
                                        {{-- <a data-toggle="modal" data-target="#detil" data-backdrop="static" data-keyboard="false">
                                            <button class ="btn btn-success d-inline editUser">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                    </svg>
                                            </button>
                                        </a> --}}
                                        <a>
                                            <button wire:click="delete({{ $transaction->id }})" class ="btn btn-danger d-inline">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                    </svg>
                                                </button>
                                        </a>
                                    </div>
                                </td>                             
                            </tr>
                            <div class="modal fade" id="detil" tabindex="-1" role="dialog" style="z-index:1050; display: none" aria-hidden="true">
                                <div class="modal-dialog"  role="document">
                                    <div class="modal-content" >
                                        <div class="modal-header card-header">
                                            <h4 class="modal-title">Details Transaction</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="close">
                                                <span aria-hidden="true"><i class="ti-close"></i></span>
                                            </button>
                                        </div>
                                        <div class="modal-body card-body">
                                            <div class="form-group col-md-8">
                                                <div class="row">
                                                    <label for="Name" class="col-sm-4 control-label">Invoice: </label>
                                                    <span class="font-weight-bolder">{{$transaction->invoice_number}}</span>
                                                </div>
                                                <div class="row">
                                                    <label for="Image" class="col-sm-4 control-label">User: </label>
                                                    <span class="font-weight-bolder">{{$transaction->user_id}}</span>
                                                </div>
                                                <div class="row">
                                                    <label for="Description" class="col-sm-4 control-label">Content: </label>
                                                    
                                                    {{-- <span class="font-weight-bolder">{{$item->name }} </span>&nbsp;
                                                    <span class="font-weight-bolder">{{$item->qty }} </span>&nbsp;
                                                    <span class="font-weight-bolder">{{$item->price_single }} </span>&nbsp;
                                                    <span class="font-weight-bolder">{{$item->price}}</span> --}}
                                                </div>
                                                <div class="row">
                                                    <label for="Qty" class="col-sm-4 control-label">Pay: </label>
                                                    <span class="font-weight-bolder">{{$transaction->pay}}</span>
                                                </div>
                                                <div class="row">
                                                    <label for="Harga" class="col-sm-4 control-label">Total: </label>
                                                    <span class="font-weight-bolder">{{$transaction->total}}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a onclick="window.print()">
                                                <button class ="btn btn-primary d-inline">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
                                                        <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                                                        <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
                                                    </svg>
                                                </button>
                                            </a>
                                            <a href="{{url('/transaction')}}">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                    </svg>
                                                </button>
                                            </a>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>
