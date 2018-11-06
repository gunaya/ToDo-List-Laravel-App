<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodoController extends Controller
{
    public function readData(Request $request){
    	$user_id = $request->user_id;
    	$result = Todo::where('user_id', $user_id)->get();

    	return $result;
    }

    public function createData(Request $request) {
    	$todo = new Todo ([
    		'title' => $request->title,
    		'description' => $request->description,
    		'due_date' => $request->due_date,
    		'repeat' => $request->repeat,
    		'status' => $request->status,
    		'category_id' => $request->category_id,
    		'user_id' => $request->user_id
    	]);
    	$todo->save();

    	return response()->json([
    		'message' => 'success'
    	]);
    }

    public function deleteData(Request $request) {
    	$id = $request->id;
    	$todo = Todo::find($id);
    	$todo->delete();

    	return response()->json([
    		'message' => 'success'
    	]);
    }


    public function setFinished(Request $request) {
    	$id = $request->id;

    	$todo = Todo::find($id);
    	$todo->status = 2 ;
    	$todo->save();

    	return response()->json([
    		'message' => 'success'
    	]);
    }

    public function setRepeat(Request $request) {
    	$id = $request->id;
    	$repeat = $request->repeat;

    	$todo = Todo::find($id);
    	$todo->status = 1 ;
    	$todo->repeat = $repeat;
    	$todo->save();

    	return response()->json([
    		'message' => 'success'
    	]);
    }
}
