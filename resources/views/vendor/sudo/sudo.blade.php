@extends('layouts.app')

@section('content')
<div class="container">
  @if(count($sudo_errors) > 0)
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="alert alert-danger">
            <p>The following errors occurred:</p>
            <ul>
            @foreach($sudo_errors as $error)
              <li>{{ $error }}</li>
            @endforeach
            </ul>
          </div>
        </div>
      </div>
    @endif

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Confirm Password</div>

                <div class="panel-body">
                  <div class="form-group">
                    <p class="text-center">
                      You are currently entering <strong>sudo mode</strong> and will need to re-enter your password.
                    </p>
                  </div>

                  <form class="form-horizontal" method="{{ $form_method }}" action="{{ $request_url }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    @if(!in_array($request_method, ['GET', 'POST']))
                      <input type="hidden" name="_method" value="{{ $request_method }}" />
                    @endif

                    <div class="form-group">
                        <label for="sudo_password" class="col-md-4 control-label">
                          <span class="required">*</span> Confirm Password
                        </label>
                        <div class="col-md-6">
                          <input type="password" class="form-control" name="sudo_password" id="sudo_password" autofocus/>
                          <input type="hidden" name="sudo_mode_submission" value="true" />
                        </div>
                    </div>

                    {!! $input_markup !!}

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </div>

                    <div class="form-group">
                      <span class="help-block text-center">
                        <small class="text-muted">In <strong>sudo mode</strong>, you can perform administrative actions. We won't prompt you again for a while.</small>
                      </span>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection