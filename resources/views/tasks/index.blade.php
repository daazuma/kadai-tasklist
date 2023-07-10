@extends("layouts.app")

@section("content")
    <div class="prose ml-4">
        <h2>タスク一覧</h2>
    </div>

    @if (isset($tasks))
    <table class="table table-zebra w-full my-4">
        <thead>
            <tr>
                <th>id</th>
                <th>タスク</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <td><a href="{{ route('tasks.show', $task->id) }}" class="link link-hover text-info">{{ $task-> id}}</a></td>
                <td>{{ $task->content }}</td>
                <td>{{ $task->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif

    {{-- link to cretae task page --}}
    <a href="{{ route("tasks.create") }}" class="btn btn-primary">新規タスクの登録</a>

@endsection
