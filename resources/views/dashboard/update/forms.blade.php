@extends('layouts.admin')

@section('content')
   

<section>
    <div class="container-fluid">
    <table class="table">
              <thead class="table-striped">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Titre</th>
                  <th scope="col">Prix</th>
                  <th scope="col">Image</th>
                  <th scope="col">Date de creation</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                
                <tr>
                <th scope="row">{{ $make_up->id}}</td> 
                <td>{{ $make_up->titre_make_up}}</td>
                  <td>{{ $make_up->prix}}</td>
                  <td><img class="img-fluid" src="{{URL::asset('images/'.$make_up->img)}}" alt="" style="border-radius: 50%"></td>
                  <td>{{ $make_up->date_make_up}}</td>
                 <td> <a href="/delete/make_up/{{$make_up->id}}"  class="btn btn-danger btn-sm badge-pill">delete</a>
                 <a href="/update/make_up/{{$make_up->id}}"  class="btn btn-primary btn-sm badge-pill">editer</a> </td>
                </tr>
             
              </tbody>
            </table>
    </div>
</section>
 
<section class="col-lg-5 connectedSortable ">
   <div class="card card-primary container-fluid">     
              <div class="card-header">
                <h3 class="card-title">Ajouter une Make up</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/update/make_up/{{$make_up->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Titre make up</label>
                    <input type="text" name="titre_make_up" value="{{$make_up->titre_make_up}}" class="form-control" id="exampleInputEmail1" placeholder="Enter le titre">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Prix make up</label>
                    <input type="text" name="prix" class="form-control" value="{{$make_up->prix}}"  id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>   
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" required for="exampleInputFile">Choisie une image</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleCheck1">Image de couverture</label>   
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file"  name="photo[]" multiple=""   class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choisie de couverture</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <span class="form-label">Date</span>
                      <input class="form-control @error('date_reservation') is-invalid @enderror" value="{{$make_up->date_make_up}}" name="date_make_up" type="date" required value="{{old('date_reservation')}}">
                    </div>
                    @error('date_make_up')
                        <div class="invalid-feedback">
                           {{$errors->first('date_make_up')}}
                        </div>
                      @enderror
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
        </div>   
    </div> 
      <!-- /.card -->
</section>  
              

@endsection