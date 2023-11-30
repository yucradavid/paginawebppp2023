@extends('adminlte::page')
 <!-- titulo --> 
 @section('title', 'Lista de roles')

  @section('content_header')
  <a href="{{route('admin.admin.roles.create')}}" class="btn btn-sm btn-primary"> Nuevo Plan </a>
   <h1>Lista de roles</h1> 
   @stop @section('content')
    <div class="card">
         <div class="card-body">
             <table class="table table-striped">
<thead> 
    <tr> 
        <th>ID</th>
        <th>Rol</th> 
        <th colspan="2"></th>
    </tr> 
</thead>
                  
<tbody>
 @foreach($roles as $role) 
 <tr> <td>{{ $role ->id }}</td>
  <td>{{ $role->name }}</td> 
  <td width="10px"> 
    <a href="{{route('admin.admin.roles.edit', $role )}}" class="btn btn-sm btn-primary"> Editar </a>
 </td> <td> <form action="{{route('admin.admin.roles.destroy', $role ) }}" método="POST">
     @csrf @method('DELETE') <button type="submit" class="btn btn-sm btn-danger"> Eliminar </button>
     </form> 
    </td> 
</tr> 
@endforeach 
</tbody>
 </table>
 </div>
 </div> 
     @stop

