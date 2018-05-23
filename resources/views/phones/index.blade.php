@extends('layouts.app')

@section('content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Телефонная книга</h4>
                <button data-toggle="modal" data-target="#responsive-modal" class="btn waves-effect waves-light btn-danger pull-right">Добавить запись</button>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Имя</th>
                            <th>Телефон</th>
                            <th>Действие</th>
                        </tr>
                        </thead>
                        @forelse($phones as $index =>  $phone)
                        <tbody>
                        <tr>
                            <td>{{$index+1}}</td>
                            <td>{{$phone->name}}</td>
                            <td>{{$phone->number}}</td>
                            <td>
                                <div class="container-fluid">
                                    <div class="row">
                                        <a href="{{ route('phones.edit', $phone->id) }}" class="btn btn-info btn-circle"><i class="mdi mdi-account-edit"></i> </a>
                                        <form action="{{ route('phones.destroy', $phone->id)}}" method="post">
                                            {{csrf_field()}}
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-warning btn-circle" type="submit"><i class="fa fa-times"></i> </button>
                                        </form>
                                    </div>

                                </div>
                            </td>
                        </tr>
                        </tbody>
                            @empty
                            <p>Записей не найдено..</p>
                        @endforelse
                    </table>
                    <div class="text-center">
                        {{ $phones->appends(request()->all())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
                <!-- sample modal content -->
                <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Добавление записи</h4>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('phones.store') }}" method="POST">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="name" class="control-label">Имя:</label>
                                        <input type="text" name="name" id="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="number" class="control-label">Номер:</label>
                                        <input type="text" name="number" id="number" class="form-control">
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
