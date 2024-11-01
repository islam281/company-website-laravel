<form action="{{  $href }}" method="post">

    @csrf
    @method("DELETE")
    <button type="submit" class="btn btn-sm btn-danger"><i class="fe fe-trash-2 fa-2x"></i></button>
 </form>
