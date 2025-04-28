<!DOCTYPE html>
<html>
  <head> 
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

                <h1 style="font-size: 30px; font-weight: bold;">Tambah Ruangan</h1>
        
                            <form action="{{url('add_room')}}" method="Post" enctype="multipart/form-data">

                            @csrf
                                    <div class="div_deg">
                                        <label for="">Nama Ruangan</label>
                                        <input type="text" name="room_title">
                                    </div>

                                    <div class="div_deg">
                                        <label for="">Deskripsi</label>
                                        

                                        <textarea name="description" id=""></textarea>
                                    </div>

                                    <div class="div_deg">
                                        <label for="">Tipe Ruangan</label>
                                        <select name="room_type" id="">
                                            <option value="aula">Aula</option>
                                            <option value="ruangrapat">Ruang Rapat</option>
                                            <option value="ruangserbaguna">Ruang Serba Guna</option>

                                        </select>
                                    </div>

                                    

                                    <div class="div_deg">
                                        <label for="">Upload Gambar</label>
                                        <input type="file" name="image">
                                    </div>

                                    <div class="div_deg">
                                        <input class="btn btn-primary"type="submit"value="Add Room">
                                    </div>
                                </form>
                </div>
        </div>
    </div>
 </div>
        

        @include('admin.footer')
  </body>
</html>