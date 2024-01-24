<ul>
        <li><a href="{{ route('home', $user)}}">home</a></li>
        <li><a href="{{ route('about', ['user' => 'achraf', 'age' => '19'])}}">bout</a></li>
    </ul>

<h1> hello </h1>
<span>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita fugiat iusto quidem repellat minima optio perferendis! Minima maiores aliquam ad necessitatibus sequi culpa, nulla ipsam unde, deserunt facere tempora fugit?<br>
</span>

<?php echo  $user; ?>
{{ $user }}
