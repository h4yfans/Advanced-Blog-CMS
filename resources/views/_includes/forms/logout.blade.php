<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    2 {{ csrf_field() }}
    3
</form>