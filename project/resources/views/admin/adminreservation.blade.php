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
table, td, th {
  border: 2px solid black;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>
    <div style="position: relative;top: 60px; right:0px">
    	    <h1>Reservations</h1>
    	<table bgcolor="DarkSlateGray" border="3px">
    		<tr align="center">
    			<th style="padding: 30px;">Name of the customer</th>
    			<th style="padding: 30px;">Email no.</th>
    			<th style="padding: 30px;">Phone no.</th>
    			<th style="padding: 30px;">Number of guests</th>
    			<th style="padding: 30px;">Date</th>
    			<th style="padding: 30px;">Time</th>
    			<th style="padding: 30px;">Food</th>
    			<th style="padding: 30px;">Occasion</th>
    		</tr>
		
		@foreach($data as $data)

    		<tr align="center">
    			<td>{{$data->name}}</td>
    			<td>{{$data->email}}</td>
    			<td>{{$data->phone}}</td>
    			<td>{{$data->guest}}</td>
    			<td>{{$data->date}}</td>
    			<td>{{$data->time}}</td>
    			<td>{{$data->food}}</td>
    			<td>{{$data->occasion}}</td>
			</tr>

    		@endforeach
    	</table>

    </div>


    </div>

    @include("admin.adminscript")
    

  </body>
</html>