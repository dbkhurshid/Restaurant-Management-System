<x-app-layout>
    
</x-app-layout>


<!DOCTYPE html>
<html lang="en">
  <head>
  	  @include("admin.admincss")
  </head>
  <body>

    <div class="container-scroller">


    @include("admin.navbar")
 <style> 
input {
  width: center;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
h1 {
  display: block;
  font-size: 2em;
  margin-top: 0.67em;
  margin-bottom: 0.67em;
  margin-left: 0;
  margin-right: 0;
  font-weight: bold;
}
</style>
<style>
table, td, th {
  border: 2px solid black;
}
/*
table {
  border-collapse: collapse;
}*/
</style>
<div style="position: relative; top:30px; right:0px ">
    <h1>Customer Orders</h1>
    <form action="{{url('/search')}}" method="get">

      @csrf
      

      <input type="text" name="search" style="color:blue;">

      <input type="submit" value="Search" class="btn btn-success">


    </form>
    
    <div>
    	<table bgcolor="DarkSlateGray" border="3px">
    		<tr align="center">
    			<td style="padding: 30px">Name</td>
    			<td style="padding: 20px">Phone</td>
    			<td style="padding: 20px">Address</td>
    			<td style="padding: 20px">Food name</td>
    			<td style="padding: 20px">Price</td>
    			<td style="padding: 20px">Quantity</td>
    			<td style="padding: 20px">Total Price</td>

    		</tr>

    		@foreach($data as $data)
    		<tr align="center">
  			<td>{{$data->name}}</td>
  			<td>{{$data->phone}}</td>
  			<td>{{$data->address}}</td>
  			<td>{{$data->foodname}}</td>
  			<td>{{$data->price}}TK</td>
  			<td>{{$data->quantity}}</td>
  			<td>{{$data->price * $data->quantity}}TK</td>
    		</tr>
    		@endforeach


    	</table>

    	</div>
    </div>

    @include("admin.adminscript")
    
</div>
  </body>
</html>