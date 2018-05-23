@extends('layouts.app')

@section('content')
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Информация о студентах</h4>
                    {{csrf_field()}}
                    {{--Errors--}}
                    @include('inc.errors_list')
                    {{--Success--}}
                    @include('inc.success')
                    <button data-toggle="modal" data-target="#responsive-modal" class="btn waves-effect waves-light btn-success pull-right">Поселиние студента</button>
                    <br><br>
                    <h6 class="card-subtitle"></h6>
                    <div class="table-responsive">
                        <table id="demo-foo-addrow" class="table m-t-50 table-hover contact-list" data-page-size="10">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Имя</th>
                                <th>Фамилия</th>
                                <th>Отчество</th>
                                <th>Страна</th>
                                <th>Факультет</th>
                                <th>Телефон</th>
                                <th>Номер комнаты</th>
                                <th>Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($students as $index => $student)
                            <tr>
                                <td>{{$index+1}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->surname}}</td>
                                <td>{{$student->patronymic}}</td>
                                <td>{{$student->country}}</td>
                                <td>{{$student->faculty}}</td>
                                <td>{{$student->phone}}</td>
                                <td>{{$student->place}}</td>
                                <td>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Выбор действия
                                                </button>
                                                <div class="dropdown-menu animated flipInX" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 33px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                    <a class="dropdown-item" href="{{ route('students.edit', $student->id) }}" class="btn btn-info btn-circle"> Изменить  </a>
                                                    <form action="{{ route('students.destroy', $student->id)}}" method="post">
                                                        {{csrf_field()}}
                                                        {{ method_field('DELETE') }}
                                                        <button class="dropdown-item" type="submit">Выселить</button>
                                                    </form>
                                                    <a class="dropdown-item" href="#">Переселить</a>
                                                </div>

                                            </div>
                                            </div>


                                    </div>
                                </td>
                            </tr>
                            </tbody>
                            @empty
                                <p>Записей не найдено..</p>
                            @endforelse
                            <tfoot>
                            <tr>
                                <td colspan="7">
                                    <div class="text-right">
                                        <ul class="pagination"> </ul>
                                    </div>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <!-- sample modal content -->
            <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Добавление записи</h4>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('students.store')}}" method="post">
                                {{csrf_field()}}
                                <div class="form-body">
                                    <div class="row p-t-30">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Имя</label>
                                                <input type="text" id="name" name="name" value="1" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Фамилия</label>
                                                <input type="text" id="surname" name="surname" value="1" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Отчество</label>
                                                <input type="text" id="patronymic" name="patronymic"  value="1" class="form-control" placeholder="">
                                            </div>
                                    </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Год рождения</label>
                                                <input type="date" id="year" name="year" class="form-control" placeholder="dd-mm-yyyy">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Место жительства</label>
                                                <input type="text"  value="1" id="from" name="from" class="form-control" placeholder="">
                                            </div>
                                        <!--/span-->
                                    </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Страна</label>
                                                <input type="text"  id="country" name="country" value="1" class="form-control" placeholder="">
                                            </div>
                                        </div>

                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Институт</label>
                                                <input type="text" value="1" id="faculty" name="faculty" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Курс</label>
                                                <select class="form-control custom-select" name="course" id="course" data-placeholder="chose_course" tabindex="1">
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
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Телефон</label>
                                                <input type="text"  value="1" id="phone" name="phone" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                    <!--/row-->
                                    <div class="row">
                                        <!--/span-->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Почта</label>
                                                <input type="text" value="1" id="mail" name="mail" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">Номер комнаты</label>
                                                <input type="text" name="place" id="place" value="1" id="firstName" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <!--/span-->
                                        <div class="col-md-4">
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
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Отмена</button>
                                    <button type="submit" class="btn btn-danger waves-effect waves-light">Добавить</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
