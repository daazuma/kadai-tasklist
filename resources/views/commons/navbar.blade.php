<header class="mb-4">
    <nav class="navbar bg-neutral text-neutral-content">
        {{-- link to top page --}}
        <div class="flex-1">
            <h1><a class="btn btn-ghost normal-case text-xl" href="/">task list</a></h1>
        </div>

        <div class="flex-none">
            <ul tabindex="0" class="menu lg:menu-horizonztal">
                <li>
                    <a href="{{ route('tasks.create') }}" class="link link-hover">新規タスクの登録</a>
                </li>
            </ul>
        </div>
    </nav>

</header>
