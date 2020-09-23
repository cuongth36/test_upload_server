{{-- @foreach( $users as $user)
<p>Ten cua ban la: {{$user['username']}}</p>
@endforeach --}}
@include('inc.comment', ['title'=> 'Title comment'])
@php 
 foreach ($users as  $value) {
     echo $value['username'], '<br>';
 }

@endphp