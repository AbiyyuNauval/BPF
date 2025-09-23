<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data</title>
</head>
<body>
    <h1>Data</h1>
    <p>Nama: {{$name}}</p>
    <p>Umur: {{$my_age}}</p>
    Hobi:
    @foreach ($hobbies as $hobi)
        {{$hobi}}
    @endforeach

    <p>Tanggal Wisuda: {{$tgl_harus_wisuda}}</p>
    <p>Waktu Belajar: {{$time_to_study_left}}</p>
    <p>Semester Saat Ini: {{$current_semester}}</p>
    <p>{{$info}}</p>

    <p>Cita cita: {{$future_goal}}</p>
</body>
</html>
