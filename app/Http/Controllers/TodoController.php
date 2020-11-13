<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todo;
use App\Http\Requests\formCreationRequest;

class TodoController extends Controller
{
  public function __construct()
  {
    // $this->middleware('auth')->except('index');
    // $this->middleware('auth')->only('index');
    $this->middleware('auth');
  }
	public function index()
	{
    $a = auth()->user()->todo;
		// $a = todo::all();
		return view('welcome')->with("allTodos", $a);
	}

  public function create(formCreationRequest $request)
  {
    // return auth()->user()->todo();
      $myId = auth()->user()->id;
      $a = todo::create(['title' => $request->title, 'user_id' => $myId]);
      // $a = todo::create(['title'=>$request->title]);
      if ($a) {
     		return redirect()->back()->with("successMessage", "Todo Uploaded");
      } else{

        return redirect()->back()->with("errorMessage", "You have been followed. Check yourself");
      }
  }

  // public function edit($id)
  // {
  //   $a = todo::find($id);
  //   return view("mytodos.edit")->with("specificTodo", $a);
  // }
  public function edit(todo $id)
  {
    return view("mytodos.edit")->with("specificTodo", $id);
  }

  public function update(todo $id, formCreationRequest $request)
  {
    $b = $id->update(['title'=> $request->title]);
    // return redirect()->route("welcome")->with("successMessage", "Todo Updated Successfully ");
    // return $id;
    if ($b) {
      return redirect("/")->with("successMessage", "Todo Updated Successfully ");
      // return view("mytodos.edit")->with("specificTodo", $id)
      // return "Success";
    }
      return redirect()->back()->with("errorMessage", "It is obviously not working");
  }

  public function completed(todo $id)
  {
    $id->update(['done' => "done"]);
     return redirect("/")->with("successMessage", "Task Updated Successfully ");
  }

  public function uncompleted(todo $id)
  {
    $id->update(['done' => "undone"]);
     return redirect("/")->with("successMessage", "Task Successfully Updated");
  }
}

