@extends("layouts.app")

@section("content")


    <div class="prose ml-4">
        <h2>タスク新規登録</h2>
    </div>

    <div>
        <form action="{{ route('tasks.store') }}" class="w-1/2" method="post">
            @csrf

            <div class="form-control my-4">
                <label for="content" class="label">
                    <span class="label-text">タスク</span>
                </label>
                <input type="text" name="content" class="input input-bordered w-full">
            </div>

            <div class="form-control my-4">
                <label for="status" class="label">
                    <span class="label-text">status</span>
                </label>
                <input type="text" name="status" class="input input-bordered w-full">
            </div>

            <button type="submit" class="btn btn-primary btn-outline">登録</button>
        </form>
    </div>

@endsection
