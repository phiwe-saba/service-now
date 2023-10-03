@extends('layouts.app')
@section('content')
<div class="container-fluid pt-5">
    <div class="row align-items-center">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center py-4">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Tickets Logged
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary">
                        <a href="">View</a>
                    </button>
                </div>
            </div>
        </div>
    
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center py-4">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                New Tickets
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary">View</button>
                </div>
            </div>
        </div>
    
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center py-4">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Pending Tickets
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary">View</button>
                </div>
            </div>
        </div>
    
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center py-4">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Closed Tickets
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary">View</button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header">
                    Tickets Reports
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quos exercitationem excepturi, ipsa repellendus culpa omnis maxime qui molestias numquam ipsum quas eos debitis at obcaecati repellat reprehenderit recusandae quo.
                </div>
            </div>
    
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">New Tickets Reports</h6>
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quos exercitationem excepturi, ipsa repellendus culpa omnis maxime qui molestias numquam ipsum quas eos debitis at obcaecati repellat reprehenderit recusandae quo.
                </div>
            </div>
        </div>
    
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header">
                    Pending Tickets Reports
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quos exercitationem excepturi, ipsa repellendus culpa omnis maxime qui molestias numquam ipsum quas eos debitis at obcaecati repellat reprehenderit recusandae quo.
                </div>
            </div>
    
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Closed Tickets Reports</h6>
                </div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quos exercitationem excepturi, ipsa repellendus culpa omnis maxime qui molestias numquam ipsum quas eos debitis at obcaecati repellat reprehenderit recusandae quo.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection