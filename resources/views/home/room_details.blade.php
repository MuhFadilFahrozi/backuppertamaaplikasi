<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
@include('home.css');

<style type="text/css"> 

   label
   {
      display: inline-block;
      width: 200px;
   }
      input
      {
         width: 100%;
      }




</style>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
@include('home.header');
      </header>


      <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Room</h2>
                     <p>Lorem Ipsum available, but the majority have suffered </p>
                  </div>
               </div>
            </div>

            
            <div class="row">
            

               <div class="col-md-8">
                  <div id="serv_hover"  class="room">
                     <div style="padding: 20px"class="room_img">
                        <img style ="height: 300px; width:800 px" src="/room/{{$room->image}}" alt="#"/>
                     </div>
                     <div class="bed_room">
                        <h3>{{$room->room_title}}</h3>
                        <p style="padding: 12px">{{$room->description}}</p>
                        <h4>Room Type : {{$room->room_type}}</h4>
                    

                     </div>
                  </div>
               </div>

            <div class="col-md-4">

            <h1 style="font-size:40px!important">Booking Ruangan</h1>


            @if($errors)

            @foreach($errors->all() as $errors)

            <li style="color:red">
               {{$errors}}
            </li>


            @endforeach

            @endif

               <form action="{{url('add_booking',$room->id)}}" method="Post">

               @csrf

               <div>
                  <label>Nama</label>
                  <input type="text" name="name" @if(Auth::id())value="{{Auth::user()->name}}" @endif>
               </div>

               <div>
                  <label>Email</label>
                  <input type="email" name="email"  @if(Auth::id())value="{{Auth::user()->email}}" @endif>
               </div>

               <div>
                  <label>Nomor Telepon</label>
                  <input type="number" name="phone"  @if(Auth::id())value="{{Auth::user()->phone}}" @endif>
               </div>

               <div>
                  <label>Tanggal Pinjam</label>
                  <input type="date" name="startDate" id="startDate">
               </div>

               <div>
                  <label>Selesai Pinjam</label>
                  <input type="date" name="endDate">
               </div>

               <div style="padding-top: 20px;">
                  <input type="submit" class="btn btn-primary" value="Book Room">
               </div>

               </form>

            </div>
            


            </div>
         </div>
      </div>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->

      <!-- end contact -->
      <!--  footer -->
@include('home.footer');
<script type="text/javascript">

$(function(){
    var dtToday = new Date();
 
    var month = dtToday.getMonth() + 1;

    var day = dtToday.getDate();

    var year = dtToday.getFullYear();

    if(month < 10)
        month = '0' + month.toString();

    if(day < 10)
     day = '0' + day.toString();

    var maxDate = year + '-' + month + '-' + day;
    $('#startDate').attr('min', maxDate);
    $('#endDate').attr('min', maxDate);

});   

</script>
   </body>
</html>