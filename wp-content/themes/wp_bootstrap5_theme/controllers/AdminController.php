<?php

namespace WP_Bootstrap5_Theme\Controller;


use WP_Bootstrap5_Theme\Model\Admin;


class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();

        return view('admins.index', ['admins' => $admins]);
    }

    public function create()
    {
        return view('admins.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:6',
        ]);

        $admin = Admin::create($data);

        return redirect('/admins/' . $admin->id);
    }

    public function show($id)
    {
        $admin = Admin::find($id);

        return view('admins.show', ['admin' => $admin]);
    }

    public function edit($id)
    {
        $admin = Admin::find($id);

        return view('admins.edit', ['admin' => $admin]);
    }

    public function update($id)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins,email,' . $id,
            'password' => 'sometimes|min:6',
        ]);

        $admin = Admin::find($id);
        $admin->update($data);

        return redirect('/admins/' . $admin->id);
    }

    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();

        return redirect('/admins');
    }
}
