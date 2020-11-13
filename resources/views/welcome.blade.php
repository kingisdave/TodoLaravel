@extends('navbar')
  
@section('viewingpages')
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-8 col-10 mx-auto">
				<div class="card m-1">
				    <div class="card-body">
                        @if($errors)
                
                            @foreach($errors as $myerr)
                                <div class="alert alert-danger">{{$myerr[0]->title}}</div>
                            @endforeach
                        @endif
                        <form action="/todo/create" method="POST" class="form-inline">
                            @csrf
                            <div class="form-group text-center">	
                                <input type="text" name="title" class="form-control" />
                                <input type="submit" name="done" class="btn btn-outline-info" />
                            </div>
                        </form>
	
		    	    </div>
		        </div>

				<div class="card shadow m-1">
					<div class="card-body">

                        <x-mymessages />

                        @if($allTodos ?? "")
                            <table class="table table-striped">
                                @foreach($allTodos as $todo)
                                <!-- <li>{{$todo->title}}<a class="mr-4" href="/todo/{{$todo->id}}/edit">Edit</a></li>   -->
                            
                                    <tr>
                                        <td>{{$todo->title}}</td>
                                        <td>
                                            <a class="m-2 " href="{{route('todo.edit', $todo->id)}}">Edit</a>
                                        </td>
                                        @if($todo->done=== "done")
                                            <td>
                                                <span class="text-success">done</span>
                                            </td>
                                            <td>
                                                <span class="btn btn-sm btn-outline-dark" onclick="var a = <?php echo 'notcompleted'.$todo->id ?>; a.submit() ">Undo</span>
                                                <form method="POST" id="{{'notcompleted'.$todo->id}}" action="{{route('todo.uncompleted', $todo->id)}}">
                                                    @csrf
                                                </form>
                                            </td>
                                        @else
                                            <td>
                                                <span class="text-danger ">Not Done</span>
                                            </td>
                                            <td>
                                                <span class="btn btn-sm btn-outline-primary" onclick="document.getElementById('completed{{$todo->id}}').submit()">Complete</span>
                                            
                                                <form method="POST" id="{{'completed'.$todo->id}}" action="{{route('todo.completed', $todo->id)}}">
                                                    @csrf
                                                </form>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </table>
                        @endif
				    </div>
				</div>
				
				
			</div>
		</div>
	</div>

@endsection


<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title> -->

         <!-- Fonts  -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

        <!-- Styles -->
       <!--  <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
   </head>
    <body> 

       <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                      
                      <form action="/todo/create" method="POST">
                            @csrf
                            <input type="text" name="title" />
                            <input type="submit" name="done" />
                        </form>
                    @endauth
                </div>
            @endif 

         
    </body>
</html>
 -->