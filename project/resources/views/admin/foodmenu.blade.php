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

    <div style="position: relative; top:30px; right:0px ">
    	<h1>Update Or Delete Food items</h1>
    	<form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

    		@csrf

    		<div>
    			<label>Title</label>
    			<input style="color:DarkSlateGray" type="text" name="title" placeholder="Write a title" required>
    		</div>
    	
    		<div>
    			<label>Price</label>
    			<input style="color:DarkSlateGray" type="num" name="price" placeholder="Price" required>
    		</div>
    
    		<div>
    			<label>Image</label>
    			<input type="file" name="image"  required>
    		</div>
    	
    		<div>
    			<label>Description</label>
    			<input style="color:DarkSlateGray" type="text" size="50" name="description" placeholder="Description" required>
    		</div>
		    	

		    <div>
		    	<input style="color:DarkSlateGray" type="submit" value="Save">
		    </div>
   
   		</form>
   			<style>
table, td, th {
  border: 2px solid black;
}

table {
  
  border-collapse: collapse;
}
</style>
   		<div>
   			<table bgcolor="DarkSlateGray" border="3px">
   				<tr align="center">
   					<th style="padding: 30px">Food Name</th>
   					<th style="padding: 30px">Price</th>
   					<th style="padding: 30px">Description</th>
   					<th style="padding: 20px">Image</th>
   					<th style="padding: 30px">Action</th>
   				</tr>

   				@foreach($data as $data)
   				<tr align="center">
   				<td>{{$data->title}}</td>
   				<td>{{$data->price}}</td>
   				<td>{{$data->description}}</td>
   				<td><img src="/foodimage/{{$data->image}}"></td>
   				<td><a href="{{url('/deletemenu',$data->id)}}">Delete</a></td>
   				</tr>
   				@endforeach

   			</table>
   		</div>
    </div>



    @include("admin.adminscript")
	</div>

</body>
</html>
