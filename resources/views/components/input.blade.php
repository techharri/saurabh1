<label for="">{{$label}}</label>
<input type="{{$type}}" name="{{$name}}">
        @error($name)
        <span style="color:red;">{{ $message }}</span>
        @enderror<br>