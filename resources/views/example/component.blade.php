<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Component</h1>
    <h3>empty data</h3>
    <!-- @component('components/message',[])
    @endcomponent -->
    <x-message name="nuttakorn"/>
    <hr />
    <h3>has data</h3>
    @component('components/message',['name' => 'poolsawat.com'])
    @endcomponent
    <hr />
    <h3>append slot</h3>
    @component('components/message-slot',[])
    <div>element slot 1</div>
    <div>element slot 2</div>
    @endcomponent
    <hr />
    <x-alert />(การเรียก component แบบที่2)
</body>

</html>