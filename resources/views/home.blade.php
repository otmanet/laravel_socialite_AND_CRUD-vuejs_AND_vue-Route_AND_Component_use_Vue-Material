@extends('layouts.app')

@section('content')
<div style="width:100%;height:1200%">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                
                  <Mycustomers></Mycustomers>
                
</div>

@endsection
