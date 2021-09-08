@extends('layouts.pdf')


@section('title')
    Rekap Permintaan
@endsection


{{-- @push('addon-style')
    <link href="http://lahanv1.test/style/main.css" rel="stylesheet" type="text/css"/>
@endpush --}}


@section('content')

<div class="page-content page-home">
    <div class="container">
        <div class="row">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td width="10%" style="border: none"></td>
                        <td width="10%" style="border: none"></td>
                        <td width="10%" style="border: none"></td>
                        <td width="10%" style="border: none"></td>
                        <td width="10%" style="border: none"></td>
                        <td width="10%" style="border: none"></td>
                        <td width="10%" style="border: none"></td>
                        <td width="10%" style="border: none"></td>
                        <td colspan="2" class="text-right" style="border: 1px solid;border-right: 1px solid;">PRO.78.03</td>
                    </tr>
                    <tr>
                        <td width="10%" style="border: none"></td>
                        <td width="10%" style="border: none"></td>
                        <td width="10%" style="border: none"></td>
                        <td width="10%" style="border: none"></td>
                        <td width="10%" style="border: none"></td>
                        <td width="10%" style="border: none"></td>
                        <td width="10%" style="border: none"></td>
                        <td width="10%" style="border: none"></td>
                        <td width="10%" style="border: none"></td>
                        <td width="10%" style="border: none"></td>
                    </tr>
                    <tr>
                        <td colspan="3" class="text-center align-middle">
                            <img src="{{ asset('images/logo.png') }}" class="card-img-top w-50">
                        </td>
                        <td colspan="7" class="text-center">
                            <p><h3>PERMINTAAN SARANA PENELITIAN</h3></p>
                            <p class="m-0">Nomor : {{ $item->nomor }}</p>
                            <p class="m-0">Tanggal : {{ $item->tanggal }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="12">
                             Sesuai proposal 
                        </td>
                    </tr>
                    <tr>
                        <td colspan="12">
                            <p style="padding-left:20px;">Judul Kegiatan    : {{ $item->judul }}</p>
                            <p style="padding-left:20px;">Waktu Pelaksanaan : {{ $item->awal_pelaksanaan }} sampai {{ $item->akhir_pelaksanaan }}</p>	
                            <p style="padding-left:20px;">Blok              : {{ $item->blok_details }}</p>	
                            <p style="padding-left:20px;">Peneliti          : {{ $item->judul }}</p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="12">
                             Mohon untuk dapat disediakan sarana / prasarana penelitian pada komoditas {{ $item->komoditas }} berupa :
                        </td>
                    </tr>

                    <tr>
                        <td colspan="5">
                            <p style="padding-left:5px;">A. Areal</p>
                            @if ($item->areal == "Lahan sawah/lahan basah")
                                <p style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Lahan sawah , {{ $item->keterangan_areal }} luas m<sup>2</sup>
                                </p>
                            @else
                                <p style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Lahan sawah , ..... luas m<sup>2</sup>
                                </p>
                            @endif


                            @if ($item->areal == "Lahan Kering ")
                                <p style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Lahan Kering , {{ $item->keterangan_areal }} luas m<sup>2</sup>
                                </p>
                            @else
                                <p style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Lahan Kering , ..... luas m<sup>2</sup>
                                </p>
                            @endif


                            @if ($item->areal == "Rumah Kaca")
                                <p style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Rumah Kaca , {{ $item->keterangan_areal }} luas m<sup>2</sup>
                                </p>
                            @else
                                <p style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Rumah Kaca , jumlah ..... buah
                                </p>
                            @endif

                            @if ($item->areal == "Lahan Paving")
                                <p style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Lahan paving , {{ $item->keterangan_areal }} luas m<sup>2</sup>
                                </p>
                            @else
                                <p style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Lahan paving , ..... luas m<sup>2</sup>
                                </p>
                            @endif

                            @if ($item->areal == "Laboratorium")
                                <p style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Laboratorium , {{ $item->keterangan_areal }}
                                </p>
                            @else
                                <p style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Laboratorium .....
                                </p>
                            @endif
                        </td>
                        
                        <td colspan="5">
                             <p style="padding-left:5px;">B. Peralatan</p>

                            @if ($item->peralatan == "Ember")
                                <p style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Ember , jumlah {{ $item->jumlah_peralatan }}
                                </p>
                            @else
                                <p style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Ember , jumlah ......
                                </p>
                            @endif
                            
                            @if ($item->peralatan == "Polibag")
                                <p style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Polibag , jumlah {{ $item->jumlah_peralatan }}
                                </p>
                            @else
                                <p style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Polibag, jumlah .......
                                </p>
                            @endif

                            @if ($item->peralatan == "Pot/drum")
                                <p style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Pot/drum, jumlah {{ $item->jumlah_peralatan }}
                                </p>
                            @else
                                <p style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Pot/drum, jumlah .......
                                </p>
                            @endif

                            @if ($item->peralatan == "Mulsa")
                                <p style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Mulsa
                                </p>
                            @else
                                <p style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Mulsa
                                </p>
                            @endif

                            @if ($item->peralatan == "Lainnya")
                                <p style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Paket peralatan budidaya (cangkul, dll)
                                </p>
                            @else
                                <p style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Paket peralatan budidaya (cangkul, dll)
                                </p>
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <td height="80px" colspan="5">
                            <p style="padding-left:5px;">C. Benih & Pupuk</p>
                            <p style="padding-left:20px;">
                                <input type="checkbox" aria-label="Checkbox for following text input"> Benih, (Disediakan peneliti)
                            </p>
                            <p style="padding-left:20px;">
                                <input type="checkbox" aria-label="Checkbox for following text input"> Petroganik
                            </p>
                            <p style="padding-left:20px;">
                                <input type="checkbox" aria-label="Checkbox for following text input"> Phonska
                            </p>
                            <p style="padding-left:20px;">
                                <input type="checkbox" aria-label="Checkbox for following text input"> Urea
                            </p>
                        </td>
                        <td colspan="5">
                            <p style="padding-left:20px;margin-top:40px;">
                                <input type="checkbox" aria-label="Checkbox for following text input"> ZA , ...... Kg
                            </p>
                            <p style="padding-left:20px;">
                                <input type="checkbox" aria-label="Checkbox for following text input"> ZK , ...... Kg
                            </p>
                            <p style="padding-left:20px;">
                                <input type="checkbox" aria-label="Checkbox for following text input"> KCI , ...... Kg
                            </p>
                            <p style="padding-left:20px;">
                                <input type="checkbox" aria-label="Checkbox for following text input"> Lain-lain , ...... Kg
                            </p>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="5">
                            <p style="padding-left:5px;">D. Sarana lain</p>
                            <p style="padding-left:20px;">
                                <input type="checkbox" aria-label="Checkbox for following text input"> Pestisida sesuai kebutuhan
                            </p>
                            <p style="padding-left:20px;">
                                <input type="checkbox" aria-label="Checkbox for following text input"> Herbisida sesuai kebutuhan
                            </p>
                            <p style="padding-left:20px;">
                                <input type="checkbox" aria-label="Checkbox for following text input"> Fungisida sesuai kebutuhan
                            </p>
                        </td>
                        <td colspan="5">
                            <p style="padding-left:20px;margin-top:40px;">
                                <input type="checkbox" aria-label="Checkbox for following text input"> Plastik Barier
                            </p>
                            <p style="padding-left:20px;">
                                <input type="checkbox" aria-label="Checkbox for following text input"> Jaring Burung
                            </p>
                            <p style="padding-left:20px;">
                                <input type="checkbox" aria-label="Checkbox for following text input"> Lain-lain , ...... Kg
                            </p>
                        </td>
                    </tr>
                    <tr height="150px">
                        <td colspan="3">
                            <p class="text-center">
                                 Peneliti
                            </p>
                        </td>
                        <td colspan="4">
                            <p class="mb-0">
                                 <u>Catatan :</u>
                            </p>
                            <p>
                                 Dapat disiapkan / ditunda **
                            </p>
                        </td>
                        <td colspan="3">
                            <p class="text-center">
                                 Staf Muda I/II
                            </p>
                        </td>
                    </tr>

                    <tr height="150px">
                        <td colspan="5">
                            <p class="mb-0">
                                 <u>Pendapat Staf Muda / VP * :</u>
                            </p>
                            <p>
                                 Dapat disiapkan / ditunda **
                            </p>
                        </td>
                        <td colspan="5">
                            <p class="text-center">
                                 Mengetahui Staf Muda / VP *
                            </p>
                        </td>
                    </tr>
                </tbody>
            </table>
        
        </div>

    </div>

    
</div>

@endsection