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
                        <form action="{{ route('students.update' , $student->id) }}" method="POST">
                            {{csrf_field()}}
                            {{ method_field('PUT') }}
                            {{--Errors--}}
                            @include('inc.errors_list')

                            {{--Success--}}
                            @include('inc.success')
                            
                            <div class="form-body">
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Имя</label>
                                            <input type="text" id="name" name="name" value="{{$student->name}}" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Фамилия</label>
                                            <input type="text" id="surname" name="surname" value="{{$student->surname}}" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Отчество</label>
                                            <input type="text" id="patronymic" name="patronymic"  value="{{$student->patronymic}}" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Год рождения</label>
                                            <input type="date" id="year" name="year" value="{{$student->year}}" class="form-control" placeholder="dd-mm-yyyy">
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Место жительства</label>
                                            <input type="text"  value="{{$student->from}}" id="from" name="from" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Страна</label>
                                            <input type="text"  id="country" name="country" value="{{$student->country}}" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Институт</label>
                                            <input type="text" value="{{$student->faculty}}" id="faculty" name="faculty" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Курс</label>
                                            <select class="form-control custom-select" name="course" id="course" data-placeholder="chose_course" tabindex="1">
                                                @if(isset($student->course))
                                                    <option selected value="{{$student->course}}">{{$student->course}}</option>
                                                @endif

                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Телефон</label>
                                            <input type="text"  value="{{$student->phone}}" id="phone" name="phone" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Почта</label>
                                            <input type="text" value="{{$student->mail}}" id="mail" name="mail" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Номер комнаты</label>
                                            <input type="text" name="place" id="place" value="{{$student->place}}" id="firstName" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Оплата</label>
                                            <select class="form-control custom-select" id="payment" name="payment" data-placeholder="chose_course" tabindex="1">
                                                @if(isset($student->payment))
                                                    <option selected value="{{$student->payment}}">
                                                        @if(($student->payment==1))
                                                            Оплачено
                                                            @else
                                                            Не оплачено
                                                            @endif
                                                    </option>
                                                    @endif
                                                <option value="1">Оплачено</option>
                                                <option value="0">Не оплачено</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                            </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-danger waves-effect waves-light">Изменить</button>
                                </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

@endsection