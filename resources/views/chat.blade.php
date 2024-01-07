@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Chat') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="  mb-3">
                        <div class="form-floating mb-3">
                            <input
                                type="text"
                                class="form-control"
                                name="username"
                                id="username"
                                placeholder=""
                            />
                            <label for="username">Username</label>
                        </div>

                       <div id="messages"></div>

                        <form action="" id="message_form">
                            <div class="form-floating mb-3">
                                <input
                                    type="text"
                                    class="form-control"
                                    name="message"
                                    id="message"
                                    placeholder=""
                                />
                                <label for="message">Message</label>
                            </div>
    
                           <button id="message_send" class=" btn btn-primary">Send</button>
                        </form>
                       
                        
                    </div>
                 
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
