@extends('layouts.admin')
@section('content')



<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Dashboard
                </div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card text-white bg-primary">
                                <a href="/helpdesk-final/public/admin/tickets" style="text-decoration:none;">
                                <div class="card-body pb-3">
                                    <div class="text-value">{{ number_format($totalTickets) }}</div>
                                    <div>Total tickets</div>
</a>
                                    <br />
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md-4">
                            <div class="card text-white bg-success">
                            <a href="/helpdesk-final/public/admin/tickets" style="text-decoration:none;" >
                                <div class="card-body pb-3">
                                    <div class="text-value">{{ number_format($openTickets) }}</div>
                                    <div>Open tickets</div> </a>
                                    <br />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card text-white bg-danger">
                            <a href="/helpdesk-final/public/admin/tickets" style="text-decoration:none;">
                                <div class="card-body pb-3">
                                    <div class="text-value">{{ number_format($closedTickets) }}</div>
                                    <div>Closed tickets</div></a>
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
@setion('styles')
<style>

a:visited {
    color: white;
    text-decoration: none;
}
      </style>
@parent

@endsection