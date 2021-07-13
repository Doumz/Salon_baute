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
                  <th scope="col"> <small class="badge badge-danger"><i class="far fa-clock"></i> Date </small></th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach( $make_up as $coff)
                <tr>
                <th scope="row">{{ $coff->id}}</td> 
                <td>{{ $coff->titre_make_up}}</td>
                  <td>{{ $coff->prix}}</td>
                  <td><img class="img-fluid" src="{{URL::asset('images/'.$coff->img)}}" alt="" style="border-radius: 50%"></td>
                  <td>{{ $coff->date_make_up}}</td>
                 <td> <a href="/delete/make_up/{{$coff->id}}"  class="btn btn-danger btn-sm badge-pill">delete</a>
                 <a href="/update/make_up/{{$coff->id}}">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                   </a> </td>
                </tr>
                @endforeach
              </tbody>
            </table>
    </div>
</section>
 
<section class="col-lg-5 connectedSortable ">
   <div class="card card-primary container-fluid" >
      <div class=" text-center margin-tb" tyle="margin-top: 8%">
         <div class="pul-left">
            @if(Session::has('message'))
              <div class="alert  alert-success">
                   <p>{{Session::get('message')}}</p>
               </div>
                  @endif
           </div>
          </div>
              <div class="card-header">
                <h3 class="card-title">Ajouter une Make up</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('add.add_make_up')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Titre make up</label>
                    <input type="text" name="titre_make_up" class="form-control" id="exampleInputEmail1" placeholder="Enter le titre">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Prix make up</label>
                    <input type="text" name="prix" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>   
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choisie une image</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleCheck1">Image de couverture</label>   
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file"  name="photo[]" multiple=""  class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choisie de couverture</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <div class="col-md-5">
                    <div class="form-group">
                      <span class="form-label">Date</span>
                      <input class="form-control @error('date_reservation') is-invalid @enderror" name="date_make_up" type="date" required value="{{old('date_reservation')}}">
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
      <!-- /.card -->    
</section>  
 <section>
 <div class="container-fluid">
         <div class="card-header">
            <h3 class="card-title">
              <i class="ion ion-clipboard mr-1"></i>
               To Do List
             </h3>

                <div class="card-tools">
                 
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
                  <li style="padding-left: %">                  
                    <!-- todo text -->
                   <div class="text d-inline col-4" style="margin-right: 10%;"> <span class="text d-inline">Titre Coiffure</span></div>
                   <div class="text d-inline col-4"  style="margin-right: 10%;"> <span class="text d-inline">Prix </span></div>
                   <div class="text d-inline col-4"  style="margin-right: 10%;"> <span class="text d-inline">Image</span></div>
                    <!-- Emphasis label -->
                    <small class="badge badge-danger"><i class="far fa-clock"></i> Date </small>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li> 
                  @foreach( $make_up as $coff)
                  <li style="padding-left: %">                  
                    <!-- todo text -->
                   <div class="text d-inline col-4" style="margin-right: 10%;"> <span class="text d-inline">{{ $coff->titre_make_up}}</span></div>
                   <div class="text d-inline col-4"  style="margin-right: 10%;"> <span class="text d-inline">{{ $coff->prix}} </span></div>
                   <div class="text d-inline col-4"  style="margin-right: 10%;"> <span class="text d-inline"><img class="img-fluid" src="{{URL::asset('images/'.$coff->img)}}" alt="" style="border-radius: 50%"></span></div>
                    <!-- Emphasis label -->
                    <small class="badge badge-danger"><i class="far fa-clock"></i>{{ $coff->date_make_up}}</small>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-delet"></i>
                    </div>
                  </li>  
                  @endforeach              
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button>
              </div>
           </div> 
          </div>
 </section>

@endsection