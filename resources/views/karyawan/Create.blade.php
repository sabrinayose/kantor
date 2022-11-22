<?php use Illuminate\Support\Facades\Form;?>

<!DOCTYPE html>
<html>
    <head>
        <link href="{{ URL::asset('assets/style.css') }}" rel="stylesheet">
    </head>

    <body>
        <header>
        <a href="{{ URL::to('karyawan') }}"> All Employee </a> <strong>|</strong> <a href="{{ URL::to('karyawan/create') }}"> Add Employee </a>
        </header>

        <main>
            <h1> Add Employee</h1>
            <form class="create" method="POST" action="{{ URL::to('karyawan') }}">
                @csrf
                <pre>
                    Nama            <input class="input" type="text" name="nama"> <br>
                    Tanggal Lahir   <input class="input" type="date" name="tgl_lahir"> <br>
                    Alamat          <input class="input" type="text" name="alamat"> <br>
                    Departemen      <input class="input" type="text" name="departemen"> <br>
                    <input type="submit" class="button submit" value="Submit">
                </pre>
            </form>
        </main>
    </body>
</html>