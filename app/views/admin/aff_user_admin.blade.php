@extends('template.template_admin')

@include('template.navigation_admin')

@section('content_admin')

<main id="aff_article">
    <h2>id{{ $user[0]->id }} <span style="font-size: 0.8em;font-weight: normal;font-style: italic;">{{ $user[0]->username }}</span></h2>
    <form id='form_checkbox' action='{{ url('admin/user/'.$user[0]->id) }}' method="POST">
        {{ Form::token() }}
        <div class="form-group">
            <label class="col-sm-2 control-label">Username:</label>
            <div class="col-sm-10">
                <input type="text" name="username" class="form-control" value="{{ $user[0]->username }}">
            </div>
        </div><br><br>
        <div class="form-group">
            <label class="col-sm-2 control-label">Password:</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="password" rows="6">{{ $user[0]->password }}</textarea>
            </div>
        </div>  <br><br>
        
        <div class="form-group">
            <label class="col-sm-2 control-label">Role:</label>
            <div class="col-sm-10">

                <select name="role" class="form-control">
                     <option @if ($user[0]->role == 'teacher')
                        {{ "selected" }}
                        @endif 
                        >teacher</option>
                    <option 
                        @if ($user[0]->role == 'first_class')
                        {{ "selected" }}
                        @endif
                        >first_class</option>
                    <option 
                        @if ($user[0]->role == 'final_class')
                        {{ "selected" }}
                        @endif
                        >final_class</option>
                </select>
            </div>
        </div>
        
        <center><button style="clear:both;margin-top: 15px;" type="submit" class="btn btn-default">Modifier</button></center>

    </form>
</main>
@stop