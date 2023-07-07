@extends("layouts.app")

@section("content")

    <div class="prose ml-4">
        <h2>id = {{ $task->id }}のタスク詳細</h2>
    </div>

    <table class="table w-full my-4">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    {{-- link to edit task page --}}
    <a href="{{route ('tasks.edit' , $task->id)}}" class="btn btn-outline">このタスクを編集</a>

    {{-- form for delete task --}}

    <form action="{{ route('tasks.destroy', $task->id) }}" method="post" class="my-2">
        @csrf
        @method("DELETE")

        <button type="submit" class="btn btn-error btn-ouline" onclick="return confirm('id = {{ $task->id }}のタスクを削除しますが、よろしいですか？')">
            削除
        </button>
    </form>


    @endsection
