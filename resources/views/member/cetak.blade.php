<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Kartu Member</title>
</head>

<body>
    <section style="border: 1px solid #fff">
        <table width="100%">
            @foreach ($datamember as $key => $data)
                <tr>
                    @foreach ($data as $item)
                        <td class="text-center">
                            <div class="box">
                                <img src="{{ asset('/public/images/gambar.png') }} " alt="caad">
                                <div class="logo">
                                    <p>{{ config('app.name') }}</p>
                                    <img src="{{ asset('/public/images/tegar.png') }} " alt="card">
                                </div>
                                <div class="nama">"nama" > {{ $item->nama }}</div>
                                <div class="telepon">"telepon" > {{ $item->telepon }}</div>
                                <div class="barcode text-left">
                                    <img src="data:image/png;base64, {{ DNS2D::getBarcodePNG("$item->kode_member", 'QRCODE') }}" alt="qrcode"
                                        height="45"
                                        widht="45">
                                </div>
                            </div>
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </table>
    </section>
</body>

</html>
