@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class=" d-flex justify-content-end mb-3">
                        <a href="{{ route('users.create') }}" class="btn btn-primary">Add User</a>
                    </div>
                    {{ $dataTable->table() }}
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    {{ $dataTable->scripts() }}
@endpush
