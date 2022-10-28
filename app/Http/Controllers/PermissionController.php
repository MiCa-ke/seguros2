<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\CommonMark\Extension\Attributes\Node\Attributes;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::get();
        return view('VistaPermissions.index', compact('permissions'));
        // return view('VistaPermissions.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('VistaPermissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validacion para solo muestre por el nombre
        Permission::create(attributes:$request->only(keys:'name'));

        return redirect()->route('permissions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        return view( view:'VistaPermissions.show',data:compact(var_name:'permission'));
    }



    public function edit($id)
    {
        $permission = Permission::where('id', $id)->first();
        return view('VistaPermissions.edit', compact('permission'));
        // return view( view:'VistaPermissions.edit',data:compact(var_name:'permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
       $permission->update(attributes:$request->only(keys:'name'));
       
       return redirect()->route('permissions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect()->route('permissions.index');
    }
}
