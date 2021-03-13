<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionAndRoleController extends Controller
{
    public function index()
    {
      $role = Role::all();
      return view('admin.roles.index')->with(compact('role'));
    }
    
    public function addRoles(Request $request)
    {
      $this->validate($request, [
        'name' => 'required|unique:permissions|max:255',
      ]);
      
      Role::create(['name' => $request->name]);
      
      
      
      return redirect()->back()->with(['flash_message_success' => 'Data Berhasil Di Tambah']);
    }
    
    public function delRoles($id)
    {
      
      $role = Role::findOrFail($id);
      
      if(!$role) {
        return redirect()->back()->with(['flash_message_error' => 'Tidak Ada Data Yang diHapus']);
      }
      
      $role->delete();
      return redirect()->back()->with(['flash_message_success' => 'Data Berhasil Di Hapus']);
    }
    
    public function editRoles(Request $request, $id) 
    {
      
      $this->validate($request, [
        'name' => 'required|unique:permissions|max:255',
      ]);
      
      $role = Role::findOrFail($id); 
      if(!$role) {
        return redirect()->back()->with(['flash_message_error' => 'Tidak Ada Data Yang diHapus']);
      }
      
      Role::where(['id' => $id])->update([
        'name' => $request->name,
      ]);
      
      
      return redirect()->back()->with(['flash_message_success' => 'Data Berhasil Di Edit']);
    }
    
    
    
    public function viewPermission()
    {
      $permission = Permission::all();
      return view('admin.permission.index')->with(compact('permission'));
    }
    
    
    public function addPermission(Request $request) 
    {
      $this->validate($request, [
        'name' => 'required|unique:permissions|max:255',
      ]);
      
      Permission::create(['name' => $request->name]);
    
      return redirect()->back()->with(['flash_message_success' => 'Data Berhasil Di Tambah']);
    }
    
    public function editPermission(Request $request, $id) 
    {
      
      $this->validate($request, [
        'name' => 'required|unique:permissions|max:255',
      ]);
      
      $permission = Permission::findOrFail($id); 
      if(!$permission) {
        return redirect()->back()->with(['flash_message_error' => 'Tidak Ada Data Yang diHapus']);
      }
      
      Permission::where(['id' => $id])->update([
        'name' => $request->name,
      ]);
      
      
      return redirect()->back()->with(['flash_message_success' => 'Data Berhasil Di Edit']);
    }
    
    public function delPermission($id)
    {
      
      $permission = Permission::findOrFail($id);
      
      if(!$permission) {
        return redirect()->back()->with(['flash_message_error' => 'Tidak Ada Data Yang diHapus']);
      }
      
      $permission->delete();
      return redirect()->back()->with(['flash_message_success' => 'Data Berhasil Di Hapus']);
    }
    
}
