<!DOCTYPE html>
<html>
    <head>
        <link href="{{ URL::asset('assets/style.css') }}" rel="stylesheet">
    </head>

    <body>
        <header>
            <a href="{{ URL::to('karyawan') }}">All Employee</a> <strong>|</strong> <a href="{{ URL::to('karyawan/create') }}">Add Employee</a>
        </header>

        <main>
            <div>
                <h1> {{ $karyawan->nama }} </h1>
                <table class="detail">
                    <tr>
                        <td class="dataDetail"><strong>Tanggal Lahir</strong></td>
                        <td class="dataDetail">:</td>
                        <td class="dataDetail">{{ $karyawan->tgl_lahir }}</td>
                    </tr>
                    <tr>
                        <td class="dataDetail"><strong>Alamat</strong></td>
                        <td class="dataDetail">:</td>
                        <td class="dataDetail">{{ $karyawan->alamat }}</td>
                    </tr>
                    <tr>
                        <td class="dataDetail"><strong>Departemen</strong></td>
                        <td class="dataDetail">:</td>
                        <td class="dataDetail">{{ $karyawan->departemen }}</td>
                    </tr>
                </table>
            </div>
        </main>
    </body>
</html>