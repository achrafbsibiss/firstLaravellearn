<div class="name">
    <ul>
        <li><a href="{{ route('home', $user)}}">home</a></li>
        <li><a href="{{ route('about', compact('user', 'age'))}}">bout</a></li>
    </ul>
<h1>
    hello this the about page this the deference betwen the lik
</h1>

<h2><span>the user name: <span>{{$user}} <span>and his age: <span>{{$age}}</h2>

</div>
