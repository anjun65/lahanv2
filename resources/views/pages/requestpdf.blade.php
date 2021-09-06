@extends('layouts.pdf')


@section('title')
    Rekap Permintaan
@endsection


@push('addon-style')
    <link href="http://lahanv1.test/style/main.css" rel="stylesheet" type="text/css"/>
@endpush


@section('content')

<div class="page-content page-home">
    <div class="container">
        <div class="row">   
            <div class="col-md-12 col-lg-12 col-12">
                 
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="75%" colspan="3"></th>
                        <th width="25%" scope="col"><div class="text-right">PRO.78.03</div></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th rowspan="2" width="25%">
                            <div class="text-center">
                                <img style="width: 50%" src="http://lahanv1.test/images/logo.svg" alt="" />
                            </div>
                        </th>

                        
                        <td colspan="3">
                            <div class="text-center">
                                PERMINTAAN SARANA PENELITIAN
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div class="text-center">
                                Nomor  : {{ $item->nomor }}
                                <br/>
                                Tanggal : {{ $item->tanggal }}
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            Sesuai proposal
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">
                            Judul Kegiatan
                        </td>
                        <td width="5%">
                            :
                        </td>
                        <td width="70%" colspan="2">
                            {{ $item->judul }}
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">
                            Waktu Pelaksanaan
                        </td>
                        <td width="5%">
                            :
                        </td>
                        <td width="70%" colspan="2">
                            <div class="text-left">
                                {{ $item->awal_pelaksanaan }} - {{ $item->akhir_pelaksanaan }}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">
                            Blok
                        </td>
                        <td width="5%">
                            :
                        </td>
                        <td width="70%" colspan="2">
                            {{ $item->blok }}
                        </td>
                    </tr>
                    <tr>
                        <td width="25%">
                            Peneliti
                        </td>
                        <td width="5%">
                            :
                        </td>
                        <td width="70%" colspan="2">
                            {{ $item->user->name }}
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            mohon untuk dapat disediakan sarana / prasarana penelitian pada komoditas Padi berupa :
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" width="50%">
                            A. Areal
                        </td>
                        <td colspan="2" width="50%">
                            B. Peralatan
                        </td>
                    </tr>

                    <tr>
                        <td width="25%">
                            <input type="checkbox"> Lahan sawah
                        </td>

                        <td width="25%">
                            , luas  m2
                        </td>
                        <td width="25%">
                            <input type="checkbox" @isset($item->details->jumlah_ember) checked="true" @endisset> Ember
                        </td>                        
                        <td width="25%">
                            , jumlah {{ $item->details->jumlah_ember }}
                        </td>
                    </tr>

                    <tr>
                        <td width="25%">
                            <input type="checkbox" checked="false"> Lahan kering
                        </td>

                        <td width="25%">
                            , luas  m2
                        </td>
                        <td width="25%">
                            <input type="checkbox" @isset($item->details->jumlah_polibag) checked="true" @endisset> Polibag
                        </td>
                        
                        <td width="25%">
                            , jumlah {{ $item->details->jumlah_polibag }}
                        </td>
                    </tr>

                    <tr>
                        <td width="25%">
                            <input type="checkbox" checked="false"> Rumah Kaca
                        </td>

                        <td width="25%">
                            , Jumlah .... Buah
                        </td>
                        <td width="25%">
                            <input type="checkbox" @isset($item->details->jumlah_pot) checked="true" @endisset> Pot/Drum
                        </td>
                        <td width="25%">
                            , jumlah {{ $item->details->jumlah_pot }}
                        </td>
                    </tr>

                    <tr>
                        <td width="25%">
                            <input type="checkbox" checked="false"> Lahan Paving
                        </td>

                        <td width="25%">
                            Luas m2
                        </td>
                        <td width="25%">
                            <input type="checkbox" @isset($item->details->jumlah_mulsa) checked="true" @endisset> Mulsa
                        </td>
                        <td width="25%">
                            , jumlah {{ $item->details->jumlah_mulsa }}
                        </td>
                    </tr>

                    <tr>
                        <td width="25%">
                            <input type="checkbox" checked="false"> Laboratorium
                        </td>

                        <td width="25%">
                            .........
                        </td>
                        <td colspan="2">
                            <input type="checkbox"> Paket Peralatan budidaya (cangkul dll)
                        </td>
                    </tr>

                    <tr>
                        <td colspan="4">
                            C. Benih & Pupuk
                        </td>
                    </tr>

                    <tr>
                        <td width="50%" colspan="2">
                            <input type="checkbox" @if($item->details->jumlah_benih != 0) checked="true" @endif> Benih, (disediakan peneliti)
                        </td>

                        <td width="25%">
                            <input type="checkbox"  @isset($item->details->jumlah_za) checked="true" @endisset> ZA
                        </td>
                        <td width="25%">
                            {{ $item->details->jumlah_za }} Kg
                        </td>
                    </tr>

                    <tr>
                        <td width="50%" colspan="2">
                            <input type="checkbox" @if($item->details->jumlah_petroganik != 0) checked="true" @endif> Petroganik
                        </td>

                        <td width="25%">
                            <input type="checkbox" @isset($item->details->jumlah_za) checked="true" @endisset> ZK
                        </td>
                        <td width="25%">
                            {{ $item->details->jumlah_za }} Kg
                        </td>
                    </tr>

                    <tr>
                        <td width="50%" colspan="2">
                            <input type="checkbox" @if($item->details->jumlah_phonska != 0) checked="true" @endif> Phonska
                        </td>

                        <td width="25%">
                            <input type="checkbox" @isset($item->details->jumlah_kci) checked="true" @endisset> KCI
                        </td>
                        <td width="25%">
                            {{ $item->details->jumlah_za }} Kg
                        </td>
                    </tr>

                    <tr>
                        <td width="50%" colspan="2">
                            <input type="checkbox" checked="false"> Urea
                        </td>

                        <td width="25%">
                            <input type="checkbox" checked="false"> Lain-Lain,
                        </td>
                        <td width="25%">
                            ....... Kg
                        </td>
                    </tr>
                    

                    <tr>
                        <td colspan="4">
                            D.	Sarana lain
                        </td>
                    </tr>

                    <tr>
                        <td width="50%" colspan="2">
                            <input type="checkbox" checked="false"> Pestisida sesuai kebutuhan
                        </td>

                        <td width="50%" colspan="2">
                            <input type="checkbox" checked="false"> Plastik Barier
                        </td>
                    </tr>

                    <tr>
                        <td width="50%" colspan="2">
                            <input type="checkbox" checked="false"> Herbisida sesuai kebutuhan
                        </td>

                        <td width="50%"colspan="2">
                            <input type="checkbox" checked="false"> Jaring Burung
                        </td>
                    </tr>

                    <tr>
                        <td width="50%" colspan="2">
                            <input type="checkbox" checked="false"> Fungisida sesuai kebutuhan
                        </td>

                        <td width="50%" colspan="2">
                            <input type="checkbox" checked="false"> Lain-lain,.........
                        </td>
                    </tr>

                </tbody>

                <tbody>
                    <tr>
                        <td width="33%" colspan="2">
                            Peneliti
                        </td>

                        <td width="33%">
                            Catatan
                        </td>
                        <td width="33%">
                            Staf Muda I/II
                        </td>
                    </tr>

                    <tr>
                        <td width="50%" colspan="2">
                            Pendapat Staf Muda / VP * :
                        </td>

                        <td width="50%" colspan="2">
                            Mengetahui Staf Muda / VP *
                        </td>
                    </tr>

                </tbody>
            </table>
            			

        </div>
    </div>
</div>

@endsection