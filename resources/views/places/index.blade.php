@extends('layouts.app')

@section('content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Cписок дел</h4>
                <button data-toggle="modal" data-target="#responsive-modal" class="btn waves-effect waves-light btn-danger pull-right">Добавить</button>
                <br>
                <br>
                <div class="table-responsive">
                    @forelse($tasks as $task)
                        <div class="card">
                            <div class="card-body collapse show">
                                <p class="card-title">{{$task->date}}&emsp;{{$task->time}}</p>
                                <h4 class="card-text">{{$task->text}}</h4>
                            </div>
                        </div>
                    @empty
                        <p>Записей не найдено..</p>
                    @endforelse
                    <div class="text-center">
                        {{ $tasks->appends(request()->all())->links() }}
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
                        <form action="{{ route('tasks.store') }}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="text" class="control-label">Текст:</label>
                                <input type="text" name="text" id="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="date" class="control-label">Дата:</label>
                                <input type="date" value="<?php echo date("Y-m-d"); ?>" id="date" name="date" class="form-control" placeholder="dd-mm-yyyy">
                            </div>
                            <div class="form-group">
                                <label for="time" class="control-label">Время:</label>
                                <input type="time" class="form-control" name="time" id="time" placeholder="Check time" data-dtp="dtp_lDgXK">
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
