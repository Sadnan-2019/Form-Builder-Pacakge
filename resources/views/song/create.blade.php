<!-- resources/views/song/create.blade.php -->
@extends('song.master')

@section('body')


    {!! form($form) !!}
{{--
   ///form_row($form->field_name, ['label' => 'This label will be used']);
--}}

@endsection


{{--<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">

    <div class="row">

        {!! form($form) !!}
    </div>
</div>
</body>
</html>--}}

