<header class="mb-4">
    <nav class="navbar bg-neutral text-nutral-content">
        {{-- link to top page --}}
        <div class="flex-1">
            <h1><a href="/" class="btn-ghost normal-case text-xl"></a>task list</h1>
        </div>

        <div class="flex-none">
            <ul tabindex="0" class="menu- lg:block lg:menu-horizonztal">
                <li>
                    <a href="{{ route('tasks.create') }}" class="link link-hover">新規タスクの登録</a>
                </li>
            </ul>
        </div>
    </nav>

</header>
