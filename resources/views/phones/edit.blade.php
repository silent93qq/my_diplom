@extends('layouts.app')

@section('content')

    <div class="col-md-12">
    <!-- sample modal content -->
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Изменение записи</h4>
                </div>
                <div class="modal-body">
                    @if (isset($phone))
                        <form action="{{ route('phones.update' , $phone->id) }}" method="POST">
                            @endif
                            {{csrf_field()}}
                            {{ method_field('PUT') }}
                            {{--Errors--}}
                            @include('inc.errors_list')

                            {{--Success--}}
                            @include('inc.success')
                            <div class="form-group">
                                <label for="name" class="control-label">Имя:</label>
                                @if (isset($phone->name))
                                    <input type="text" name="name" id="name" value="{{$phone->name}}" class="form-control">
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="number" class="control-label">Номер:</label>
                                @if (isset($phone->number))
                                    <input type="text" name="number" id="number" value="{{$phone->number}}" class="form-control">
                                @endif
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-danger waves-effect waves-light">Изменить</button>
                                </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

@endsection