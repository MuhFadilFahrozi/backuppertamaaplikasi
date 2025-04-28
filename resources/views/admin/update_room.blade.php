<!DOCTYPE html>
<html>
  <head>
    
  <base href="/public">
    @include('admin.css')

    <style type="text/css">
        label
        {
            display: inline-block;
            width: 200px;
        }

        .div_deg
        {
            padding-top: 30px;
        }

        .div_center
        {
            text-align: center;
            padding-top: 40px;
        }

    </style>
  </head>
  <body>
  @include('admin.header')
  <div class="d-flex align-items-stretch">
      @include('admin.sidebar')
 <div class="page-content">
    <div class="page-header">
        <div class="container-fluid">

                <div class="div_center">

                <h1 style="font-size: 30px; font-weight: bold;">Edit Ruangan</h1>
        
                            <form action="{{url('edit_room',$data->id)}}" method="Post" enctype="multipart/form-data">

                            @csrf
                                    <div class="div_deg">
                                        <label for="">Nama Ruangan</label>
                                        <input type="text" name="room_title" value="{{$data->room_title}}">
                                    </div>

                                    <div class="div_deg">
                                        <label for="">Deskripsi</label>
                                        

                                        <textarea name="description" id="">{{$data->description}}
                                        </textarea>
                                    </div>

                                    <div class="div_deg">
                                        <label for="">Tipe Ruangan</label>
                                        <select name="room_type" id="">

                                            <option selected value="">{{$data->room_type}}</option>

                                            <option value="aula">Aula</option>
                                            <option value="ruangrapat">Ruang Rapat</option>
                                            <option value="ruangserbaguna">Ruang Serba Guna</option>

                                        </select>
                                    </div class="div_deg">

                                    <div class="div_deg" >
                                        <label for="">Gambar Saat Ini</label>
                                        <img style="margin: auto" width="100" src="/room/{{$data->image}}">
                                    </div>

                                    <div class="div_deg">
                                        <label for="">Upload Gambar</label>
                                        <input type="file" name="image">
                                    </div>

                                    <div class="div_deg">
                                        <input class="btn btn-primary"type="submit"value="Update Room">
                                    </div>
                                </form>
                </div>
        </div>
    </div>
 </div>
        

        @include('admin.footer')
  </body>
</html>