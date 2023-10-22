<form action="" method="POST">
    {{ csrf_field() }}
    <div class="mb-3">
        <input type="text" class="form-control" name="name">
        <input type="submit" value="Submit">
    </div>
    {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
</form>
