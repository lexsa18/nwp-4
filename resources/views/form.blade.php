

<form method="POST" action="{{ url('/form') }}">
    {{ csrf_field() }}
    <input name="attribute" value="{{ old('attribute') }}">
    <input name="parameter" value="{{ old('parameter') }}">
    <input type="submit" value="Отправить"/>
</form>