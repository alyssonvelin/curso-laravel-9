<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateTesteFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    protected $model;
    
    public function __construct(User $user) {
        $this->model = $user;
    }
    
    public function index(Request $request)
    {
        //$users = $this->model->get();
        $users = $this->model->getTestes(search:$request->search);
        
        return view('testes.index',compact('users'));
    }

    public function show($id)
    {
        // $user = $this->model->where('id',$id)->first();
        if(!$user = $this->model->find($id))
            return redirect()->route('testes.index');
        
        return view('testes.show',compact('user'));
    }

    public function create()
    {
        return view('testes.create');
    }

    public function store(StoreUpdateTesteFormRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $user = $this->model->create($data);
        return redirect()->route('testes.show',$user->id);
    }

    public function edit($id)
    {
        if(!$user = $this->model->find($id))
            return redirect()->route('testes.index');

        return view('testes.edit',compact('user'));
    }

    public function update(StoreUpdateTesteFormRequest $request,$id)
    {
        if(!$user = $this->model->find($id))
            return redirect()->route('testes.index');
        
        $data = $request->only('name','email');
        if($request->password)
            $data['password'] = bcrypt($request->password);
        
        $user->update($data);
        return redirect()->route('testes.index');
    }

    public function destroy($id)
    {
        if(!$user = $this->model->find($id))
            return redirect()->route('testes.index');

        $user->delete();
        return redirect()->route('testes.index');
    }
}
