@extends('layouts.app')

@section('content')
    <div class="col-lg-8 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-body">
                <center class="m-t-30"> <img src="uploads/avatars/{{Auth::user()->avatar}}" class="img-circle" width="150">
                    <h4 class="card-title m-t-10">{{Auth::user()->name}}</h4>
                    <h6 class="card-subtitle">Заведующая</h6>
                    <div class="card-body"> <small class="text-muted">{{Auth::user()->email}} </small>
                    </div>
                            <div class="col-lg-8 col-xlg-3 col-md-5">
                                <form enctype="multipart/form-data" action="/profile" method="post">
                                    <div class="form-group">
                                        <h2>Изменить фото</h2>
                                        <div class="fileinput input-group fileinput-new" data-provides="fileinput">
                                            <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i>
                                                <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file">
                        <span class="fileinput-new waves-light btn-sm btn-success">Выбрать файл</span> <span class="fileinput-exists ">Изменить</span>
                        <input type="file" name="avatar"> </span>
                                            <input type="hidden" value="{{csrf_token()}}" name="_token">
                                            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Удалить</a> </div>
                                        <br>
                                            <button type="submit" class="btn waves-effect waves-light btn-primary pull-right">Обновить</button>
                                    </div>
                                </form>
                            </div>

                </center>
            </div>
            <div>
            </div>



        </div>
    </div>



@endsection