@if (Auth::check())
    <li class="hidden lg:block"><div>User: {{ Auth::user()->name }}</div></li>
    <li><a class="link link-hover" href="{{ route('tasks.create') }}">新規タスクの登録</a></li>
    <li class="divider lg:hidden"></li>
    <li><a class="link link-hover" href="#" onclick="event.preventDefault();this.closest('form').submit();">Logout</a></li>
@else
    <li><a class="link link-hover" href="{{ route('register') }}">Sign up</a></li>
    <li class="divider lg:hidden"></li>
    <li><a class="link link-hover" href="{{ route('login') }}">Login</a></li>
@endif
