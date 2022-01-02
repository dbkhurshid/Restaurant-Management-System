<!DOCTYPE html>
<html lang="en">

<head>

	
    <title>Food Funday Restaurant</title>

    <body>
                  <!--   <li class="fa fa-shopping-cart" style="font-size:35px;color:#ff5500">
                        
                         <a href="{{url('/showcart',Auth::user()->id)}}">
                        @auth

                    
                    <i class style="font-size:20px;color:#ff5500">[{{$count}}]</i>
                        </a> 
                        @endauth

                        @guest
                        [0]
                        @endguest
                    </li>

 -->
             

<style>
table,th,td {
  border: 3px solid black;
}

table {
  width: 100%;
 
}
</style>
		

     	<div style="position: relative;top: 60 px; right: 0px; text-align: center; font-size:20px;">
     	<h1>Cart Items</h1>
     		<table bgcolor="DarkSlateGray" border="3px">

     			</div>
    	

    	<tr align="center">
    		<th style="padding: 30px; color: white">Food Name</th>
    		<th style="padding: 30px;color: white">Price</th>
    		<th style="padding: 30px;color: white">Quantity</th>
    		<th style="padding: 30px;color: white">Remove    item (s)</th>
    		
    	</tr>

<form action="{{url('orderconfirm')}}" method="POST" >

    @csrf

@foreach($data as $data)

    	<tr align="center" style="color: white">

    	<td>

        <input type="text" name="foodname[]" value="{{$data->title}}" hidden="">
                {{$data->title}}
            </td>

    		<td>
                 <input type="text" name="price[]" value="{{$data->price}}" hidden="">
                {{$data->price}}

            </td>
             <input type="text" name="quantity[]" value="{{$data->quantity}}" hidden="">
            
    		<td>{{$data->quantity}}</td>
    		
            
    		
    	</tr>

 @endforeach



         @foreach($data2 as $data2)


            <tr style="position: relative; top: -160px; left:1050px;">

             <td>
                 <a href="{{url('/remove',$data2->id)}}" >Remove</a>
             </td>

            </tr>

        @endforeach


    </table>



<div id="appear" align="center" style="padding: 10px;">


    <div style="padding: 10px;">
        <label>Name</label>
        <input type="text" name="name" placeholder="Name">
    </div>

    <div style="padding: 10px;">
        <label>Phone</label>
        <input type="text" name="phone" placeholder="Phone Number">
    </div>
    
    <div style="padding: 10px;">
        <label>Address</label>
        <input type="text" name="address" placeholder="Address">
    </div>


    <div style="padding: 10px;">
       
        <input class="btn btn-success" type="submit" value="Pay in cash on delivery">

 		 <button id="close" type="button" class="btn btn-danger">Print Receipt</button>
    </div>

</div>
</form>



</body>

</html>
</body>

</html>
