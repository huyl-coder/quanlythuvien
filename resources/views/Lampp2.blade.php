<html>
    <form action="{{route('lampp')}}" method="post">
        @csrf
        <input type="text" name="noidung">
        <input type="text" name="tuoi">
        <input type="submit">
    </form>
</html>