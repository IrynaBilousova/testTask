
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(Session::get('success'))
                    <div class="alert alert-success">
                        <ul>
                            <li>{{ Session::get('success')}}</li>
                        </ul>
                    </div>
                @endif
                @if(Session::get('failure'))
                    <div class="alert alert-danger">
                        <ul>
                            <li>{{Session::get('failure')}}</li>
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">Enter data about client</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('clients.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">Phone</label>

                                <div class="col-md-6">
                                    <input id="phone" type="phone" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" required>

                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ip_address" class="col-md-4 col-form-label text-md-right">IP Address</label>

                                <div class="col-md-6">
                                    <input id="ip_address" type="ip_address" class="form-control{{ $errors->has('ip_address') ? ' is-invalid' : '' }}" name="ip_address" value="{{ old('ip_address') }}" required>

                                    @if ($errors->has('ip_address'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('ip_address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mac_address" class="col-md-4 col-form-label text-md-right">MAC Address</label>

                                <div class="col-md-6">
                                    <input id="mac_address" type="mac_address" class="form-control{{ $errors->has('mac_address') ? ' is-invalid' : '' }}" name="mac_address" value="{{ old('mac_address') }}" required>

                                    @if ($errors->has('mac_address'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('mac_address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add record
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

