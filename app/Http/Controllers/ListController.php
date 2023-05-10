<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;
use Auth;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data['title']= 'All List';
         $data['todo_list']=TodoList::where('status','1')->paginate(10);
         return view('frontend.todo.index',$data);
       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $data['title'] ='Create Todo';
       return view('frontend.todo.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->all());
        $request->validate([
           'name'=>'required',
           'description'=>'required|max:200'

        ]);
        //dd(Auth::user());

        $list = new TodoList();
        $list->name = $request->name;
        $list->description =$request->description;
        $list->user_id= Auth::user()->id;
        $list->status = 1;
        $list->save();
        return redirect()->route('list.index')->with('success','succesfully add task');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
       $data['title'] ='edit Todo';
       $data['edit_data']=TodoList::where('status',1)->first();
       return view('frontend.todo.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
           'name'=>'required',
           'description'=>'required|max:200'

        ]);
            $todo =TodoList::where('id',$id)->first();
        if($todo->user_id!=Auth::user()->id){
            return redirect()->back()->with('error','Something is wrong');
        }else{


        $list = TodoList::find($id);
        $list->name = $request->name;
        $list->description =$request->description;
        $list->user_id= Auth::user()->id;
        $list->status = 1;
        $list->save();
        return redirect()->route('list.index')->with('success','succesfully add task');


        }

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
