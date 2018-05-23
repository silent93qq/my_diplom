@extends('layouts.app')

@section('content')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">История проживающих</h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Имя</th>
                            <th>Фамилия</th>
                            <th>Отчество</th>
                            <th>Комната</th>
                            <th>Статус</th>
                            <th>Дата</th>
                        </tr>

                        </thead>
                        <tbody>
                        <tr>
                            @forelse($history as $index => $his)
                            <td>{{$index+1}}</td>
                            <td>{{$his->name}}</td>
                            <td>{{$his->surname}}</td>
                            <td>{{$his->patronymic}}</td>
                            <td>{{$his->place}}</td>
                                @if($his->status=='Поселен')
                                    <td><span class="label label-success">{{$his->status}}</span></td>
                                @endif
                                @if($his->status=='Выселен')
                                    <td><span class="label label-danger">{{$his->status}}</span></td>
                                @endif
                                @if($his->status=='Переселен')
                                    <td><span class="label label-warning">{{$his->status}}</span></td>
                                @endif
                                <td>{{$his->created_at}}</td>
                        </tr>
                        @empty
                            <p>Записей не найдено..</p>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection