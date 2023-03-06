{{-- @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif --}}

@if (Session::has('info'))
    <div class="alert alert-info">
        {{ Session::get('info') }}
    </div>
@endif

@if (Session::has('warning'))
    <div class="alert alert-warnig">
        {{ Session::get('warning') }}
    </div>
@endif

@if(Session::has('fail'))
    <div class="alert alert-danger">
       {{Session::get('fail')}}
    </div>
@endif

@if(Session::has('success'))
  <script type="text/javascript">
     swal({
         title:'email envoyer avec succes !',
         text:"{{Session::get('success')}}",
         timer:2000,
         type:'success'
     }).then((value) => {
       //location.reload();
     }).catch(swal.noop);
 </script>
 @endif