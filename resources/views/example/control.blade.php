<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Control Structures</h1>
    <p>IF ,ELSEIF ,ELSE ,LOOP (FOR,FOREACH,WHILE) ,SWITCH</p>

</body>
<h1>IF</h1>
@if (count($records) === 1)
I have one record!

@elseif (count($records) > 1)
I have multiple records!

@else
I don't have any records!
@endif
<hr />


<h1>SWITCH</h1>
@switch($case)
@case(1)
First case...
@break

@case(2)
Second case...
@break

@default
Default case...
@endswitch
<hr />


<h1>LOOP</h1>
<h3>FOR</h3>
@for ($i = 0; $i
< 4; $i++) <br />The current value is {{ $i }}
@endfor

<h3>FOREACH</h3>
@foreach ($records as $rec)
<p>This is record {{ $rec }}</p>
@endforeach
<hr />


<h3>FORELSE</h3>
@forelse ($records as $rec)
<li>{{ $rec }}</li>
@empty
<p>No users</p>
@endforelse
<hr />


<h3>WHILE</h3>
@php
$i = 0
@endphp

@while ($i < 4) <p>I'm looping forever({{$i}}).</p>
    @php
    $i++
    @endphp
    @endwhile

</html>