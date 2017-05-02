<p>

 <?php  $i=0;?>
    @foreach($job_seeker AS $value)
        <h1 >{{$value->first_name}}</h1>
        <h1 >{{$value->last_name}}</h1>

        <h1 >{{$value->email}}</h1>
        <h1 >{{$value->gender}}</h1>
        <h1 >{{$value->dob}}</h1>
        <h1 >{{$value->personal_status}}</h1>
        <h1 >{{$value->telephone}}</h1>
        <h1 >{{$value->nationality}}</h1>

        @endforeach

</p>