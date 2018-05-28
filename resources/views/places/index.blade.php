@extends('layouts.app')

@section('content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Комнаты</h4>
                <button data-toggle="modal" data-target="#responsive-modal" class="btn waves-effect waves-light btn-danger pull-right">Добавить</button>
                <br>
                <br>
                <div class="table-responsive">
                    @forelse($places as $place)
                        <div class="card">
                            <div class="card-body collapse show">
                                <p class="card-title">Этаж: {{$place->floor}}</p>
                                <h4 class="card-text">Комната: {{$place->number}}&emsp;Количество мест: {{$place->count}}&emsp;Свободно: </h4>
                                <h4 class="card-text">Тип: {{$place->type}}</h4>
                            </div>
                        </div>
                    @empty
                        <p>Записей не найдено..</p>
                    @endforelse
                    <div class="text-center">
                        {{ $places->appends(request()->all())->links() }}
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
                        <h4 class="modal-title">Добавить комнату</h4>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('places.store') }}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="floor" class="control-label">Этаж:</label>
                                <input type="text" name="floor" id="floor" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="number" class="control-label">Комната:</label>
                                <input type="text" name="number" id="number" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="count" class="control-label">Количество мест:</label>
                                <input type="text" name="count" id="count" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Тип:</label>
                                <select class="form-control custom-select" name="type" id="type" data-placeholder="chose_course" tabindex="1">
                                    <option value="Общий">Общий</option>
                                    <option value="Гостевой">Гостевой</option>
                                </select>
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
