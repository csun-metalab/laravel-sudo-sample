<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>{{ config('app.name') }} | Confirm Password</title>

    <style type="text/css">
      .required {
        color:red;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-sm-8">
          <h1>Confirm Password</h1>

          <p>You are currently entering "sudo mode" and will need to re-enter your password.</p>
        </div>
      </div>

      @if(count($sudo_errors) > 0)
        <div class="row justify-content-md-center">
          <div class="col-sm-8">
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

      <div class="row justify-content-md-center">
        <div class="col-sm-8">
          <form method="{{ $form_method }}" action="{{ $request_url }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            @if(!in_array($request_method, ['GET', 'POST']))
            	<input type="hidden" name="_method" value="{{ $request_method }}" />
            @endif

            <div class="form-group">
              <label for="sudo_password"><span class="required">*</span> Confirm Password</label>
              <input type="password" class="form-control" name="sudo_password" id="sudo_password" />
              <input type="hidden" name="sudo_mode_submission" value="true" />
            </div>

            {!! $input_markup !!}

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>