@extends('layouts.app')

@section('content')

    <div class="col-lg-12">
    <div class="card card-outline-info">
        <div class="card-header">
            <h4 class="m-b-0 text-white">Форма заполнения студента</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('students.store')}}" method="post">
                {{csrf_field()}}
                {{--Errors--}}
                @include('inc.errors_list')
                {{--Success--}}
                @include('inc.success')
                <div class="form-body">
                    <h3 class="card-title">Данные студента</h3>
                    <hr>
                    <div class="row p-t-20">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Имя</label>
                                <input type="text" id="name" name="name" value="1" class="form-control" placeholder="">
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Фамилия</label>
                                <input type="text" id="surname" name="surname" value="1" class="form-control" placeholder="">
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Отчество</label>
                                <input type="text" id="patronymic" name="patronymic"  value="1" class="form-control" placeholder="">
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Год рождения</label>
                                <input type="date" id="year" name="year" class="form-control" placeholder="dd-mm-yyyy">
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Место жительства</label>
                                <input type="text"  value="1" id="from" name="from" class="form-control" placeholder="">
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Страна</label>
                                <input type="text"  id="country" name="country" value="1" class="form-control" placeholder="">
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Институт</label>
                                <input type="text" value="1" id="faculty" name="faculty" class="form-control" placeholder="">
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Курс</label>
                                <select class="form-control custom-select" name="course" id="course" data-placeholder="chose_course" tabindex="1">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
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
                                <input type="text"  value="1" id="phone" name="phone" class="form-control" placeholder="">
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Почта</label>
                                <input type="text" value="1" id="mail" name="mail" class="form-control" placeholder="">
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Номер комнаты</label>
                                <input type="text" name="place" id="place" value="1" id="firstName" class="form-control" placeholder="">
                            </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Оплата</label>
                                <select class="form-control custom-select" id="payment" name="payment" data-placeholder="chose_course" tabindex="1">
                                    <option value="1">Оплачено</option>
                                    <option value="0">Не оплачено</option>
                                </select>
                            </div>
                        </div>
                        <!--/span-->
                    </div>
                    <!--/row-->
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Добавить</button>
                    <button type="button" class="btn btn-inverse">Отмена</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection