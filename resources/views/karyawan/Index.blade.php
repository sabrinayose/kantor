<!DOCTYPE html>
<html>
    <head>
        <link href="{{ URL::asset('assets/style.css') }}" rel="stylesheet">
        <link rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}">
    </head>

    <body>
        <header>
            <a href="{{ URL::to('karyawan') }}"> All Employee </a> <strong>|</strong> <a href="{{ URL::to('karyawan/create') }}"> Add Employee </a> 
        </header>

        <main>
            <h1> All Employee </h1>
            @if(Session::get('message')) {{ Session::get('message') }} @endif

            <table class="tableKaryawan">
                <thead>
                    <td>ID</td>
                    <td>Nama</td>
                    <td>Tanggal Lahir</td>
                    <td>Departemen</td>
                    <td>Actions</td>
                </thead>
                @foreach ($karyawan as $key => $value)
                <tr>
                    <td class="content"> {{ $value->id }} </td>
                    <td class="content"> {{ $value->nama }} </td>
                    <td class="content"> {{ $value->tgl_lahir }} </td>
                    <td class="content"> {{ $value->departemen }} </td>
                    <td class="content action">
                        <a href="{{ URL::to('karyawan/'.$value->id) }}"> <button type="submit" class="button" name="button"> Detail </button> </a>
                        <a href="{{ URL::to('karyawan/'.$value->id.'/edit') }}"> <button type="submit" class="button" name="button"> Edit </button></a>
                        <form class='delete-form' action="{{ URL::to('karyawan/'.$value->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="button" name="button"> Delete </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </main>
    </body>
</html>