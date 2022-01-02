<!DOCTYPE html>
<html>
<head>

</head>
<body>

<x-app-layout>
    
</x-app-layout>


  <head>
  	  @include("admin.admincss")
  </head>
  <body>
  	  <div class="container-scroller">

 
    @include("admin.navbar")
    	<style>
table, td, th {
  border: 2px solid black;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>

     	<div style="position: relative;top: 60 px; right: 0px ">
     		<h1>Users</h1>
     		<table bgcolor="DarkSlateGray" border="3px">

     			<tr align="center">
     				<th style="padding: 30px">Name</th>
     				<th style="padding: 30px">Email</th>
     				<th style="padding: 30px">Action</th>
     			</tr>
     			@foreach($data as $data)
     			<tr align="center">
     				<td style="padding: 15px">{{$data->name}}</td>
     				<td>{{$data->email}}</td>
     				@if($data->usertype=="0")
     				<td><a href="{{url('/deleteuser',$data->id)}}">Delete User</a></td>
     				@else
     				<td>Admin</td>
     				@endif
     			</tr>
     			@endforeach
     		</table>
     	</div>

     	</div>
    @include("admin.adminscript")


  </body>
</html>
</body>
</html>>