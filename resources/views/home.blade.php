@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                       <!--  @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                            You are logged in!-->
  

                         <div class="form-group">
                            
                            <div class="col-md-8" >
                                <form method="GET" action="addRating">
                                    <button type="submit" name="add" class="btn btn-info btn-lg" style="margin: 5px">Add something to be Rated</button>
                                </form>
                            </div>

                           
                            <div class="col-md-8" >
                                <form method="GET" action="posts">
                                    <button type="submit" name="list" class="btn btn-info btn-lg" style="margin: 5px">List of Ratings</button>
                                </form>
                            </div>
                        </div>

                    </div>
                   

                </div>


            </div>
              
               
        </div>
    </div>
</div>
@endsection
