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
            <table class="ml-2">
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
                        <td colspan="2" class="text-right" style="border: 0.5px solid;">PRO.78.03  </td>
                    </tr>
                
                    <tr>
                        <td width="10%" style="border: none;border-left:none; !important"></td>
                        <td width="10%" style="border: none"></td>
                        <td width="10%" style="border: none"></td>
                        <td width="10%" style="border: none"></td>
                        <td width="10%" style="border: none"></td>
                        <td width="10%" style="border: none"></td>
                        <td width="10%" style="border: none"></td>
                        <td width="10%" style="border: none"></td>
                        <td width="10%" style="border: none"></td>
                        <td width="9%" style="border: none"><br/></td>
                        <td width="1%" style="border: none"><br/></td>
                    </tr>
                </tbody>
                <tbody class="table table-bordered">
                    <tr>
                        <td colspan="3" class="text-center align-middle">
                            <img src="{{ asset('images/logo.png') }}" class="card-img-top w-50">
                        </td>
                        <td colspan="7" class="text-center">
                            <p><h3>PERMINTAAN SARANA PENELITIAN</h3></p>
                            <p class="m-0">Nomor : {{ $item->nomor }}</p>
                            <p class="m-0">Tanggal : {{ $item->tanggal }}</p>
                        </td>
                        <td width="1%" style="border: none"><br/></td>
                    </tr>
                    <tr>
                        <td colspan="10">
                            <p>Sesuai proposal</p> 
                            <p style="padding-left:20px;">Judul Kegiatan    : {{ $item->judul }}</p>
                            <p style="padding-left:20px;">Waktu Pelaksanaan : {{ $item->awal_pelaksanaan }} sampai {{ $item->akhir_pelaksanaan }}</p>	
                            <p style="padding-left:20px;">Blok              : {{ $item->blok_details }}</p>	
                            <p style="padding-left:20px;">Peneliti          : {{ $item->judul }}</p>
                            Mohon untuk dapat disediakan sarana / prasarana penelitian pada komoditas {{ $item->komoditas }} berupa :
                        </td>
                        <td width="1%" style="border: none"><br/></td>
                    </tr>

                    <tr>
                        <td colspan="5">
                            <p class="m-1" style="padding-left:5px;">A. Areal</p>
                            @if ($item->areal == "Lahan sawah/lahan basah")
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Lahan sawah , {{ $item->keterangan_areal }} luas m<sup>2</sup>
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Lahan sawah , ..... luas m<sup>2</sup>
                                </p>
                            @endif


                            @if ($item->areal == "Lahan Kering ")
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Lahan Kering , {{ $item->keterangan_areal }} luas m<sup>2</sup>
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Lahan Kering , ..... luas m<sup>2</sup>
                                </p>
                            @endif


                            @if ($item->areal == "Rumah Kaca")
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Rumah Kaca , {{ $item->keterangan_areal }} luas m<sup>2</sup>
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Rumah Kaca , jumlah ..... buah
                                </p>
                            @endif

                            @if ($item->areal == "Lahan Paving")
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Lahan paving , {{ $item->keterangan_areal }} luas m<sup>2</sup>
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Lahan paving , ..... luas m<sup>2</sup>
                                </p>
                            @endif

                            @if ($item->areal == "Laboratorium")
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Laboratorium , {{ $item->keterangan_areal }}
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Laboratorium .....
                                </p>
                            @endif
                        </td>
                        
                        <td colspan="5">
                             <p class="m-1" style="padding-left:5px;">B. Peralatan</p>

                            @if ($item->peralatan == "Ember")
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Ember , jumlah {{ $item->jumlah_peralatan }}
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Ember , jumlah ......
                                </p>
                            @endif
                            
                            @if ($item->peralatan == "Polibag")
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Polibag , jumlah {{ $item->jumlah_peralatan }}
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Polibag, jumlah .......
                                </p>
                            @endif

                            @if ($item->peralatan == "Pot/drum")
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Pot/drum, jumlah {{ $item->jumlah_peralatan }}
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Pot/drum, jumlah .......
                                </p>
                            @endif

                            @if ($item->peralatan == "Mulsa")
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Mulsa
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Mulsa
                                </p>
                            @endif

                            @if ($item->peralatan == "Lainnya")
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Paket peralatan budidaya (cangkul, dll)
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Paket peralatan budidaya (cangkul, dll)
                                </p>
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <td height="80px" colspan="5">
                            <p class="m-1" style="padding-left:5px;">C. Benih & Pupuk</p>
                            
                            @if ($item->pupuk == "Benih")
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" checked="true" aria-label="Checkbox for following text input"> Benih, (Disediakan peneliti)
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Benih, (Disediakan peneliti)
                                </p>
                            @endif

                            @if ($item->pupuk == "Petroganik")
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> Petroganik
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Petroganik
                                </p>
                            @endif

                            @if ($item->pupuk == "Phonska")
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> Phonska
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Phonska
                                </p>
                            @endif

                            @if ($item->pupuk == "Urea")
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> Urea
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Urea
                                </p>
                            @endif
                            
                            
                            
                        </td>
                        <td colspan="5">
                             @if ($item->pupuk == "ZA")
                                <p style="padding-left:20px;margin-top:40px;margin-left:8px;margin-bottom:8px">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> ZA , {{ $item->jumlah_pupuk }} Kg
                                </p>
                            @else
                                <p style="padding-left:20px;margin-top:40px;margin-left:8px;margin-bottom:8px">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> ZA , ....... Kg
                                </p>
                            @endif

                             @if ($item->pupuk == "ZK")
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> ZK , {{ $item->jumlah_pupuk }} Kg
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> ZK , ...... Kg
                                </p>
                            @endif

                            @if ($item->pupuk == "KCI")
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> KCI , {{ $item->jumlah_pupuk }} Kg
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> KCI , ...... Kg
                                </p>
                            @endif

                            @if ($item->pupuk == "Lain-lain")
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> Lain-lain , {{ $item->jumlah_pupuk }} Kg
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Lain-lain , ...... Kg
                                </p>
                            @endif
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="5">
                            <p class="m-1" style="padding-left:5px;">D. Sarana lain</p>

                            @if ($item->sarana_lain == "Pestisida sesuai kebutuhan")
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" checked="true" aria-label="Checkbox for following text input"> Pestisida sesuai kebutuhan
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Pestisida sesuai kebutuhan
                                </p>
                            @endif

                            @if ($item->sarana_lain == "Herbisida sesuai kebutuhan")
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" checked="true" aria-label="Checkbox for following text input"> Herbisida sesuai kebutuhan
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Herbisida sesuai kebutuhan
                                </p>
                            @endif

                            @if ($item->sarana_lain == "Fungisida sesuai kebutuhan")
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> Fungisida sesuai kebutuhan
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Fungisida sesuai kebutuhan
                                </p>
                            @endif
                            
                        </td>
                        <td colspan="5">
                            @if ($item->sarana_lain == "Plastik Barier")
                                <p style="padding-left:20px;margin-top:40px;margin-left:8px;margin-bottom:8px">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> Plastik Barier
                                </p>
                            @else
                                <p style="padding-left:20px;margin-top:40px;margin-left:8px;margin-bottom:8px">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Plastik Barier
                                </p>
                            @endif

                            @if ($item->sarana_lain == "Jaring Burung")
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> Jaring Burung
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Jaring Burung
                                </p>
                            @endif


                            @if ($item->sarana_lain == "Lain-lain")
                                <p class="m-2" style="padding-left:20px;">
                                    <input checked="true" type="checkbox" aria-label="Checkbox for following text input"> Lain-lain , ...... Kg
                                </p>
                            @else
                                <p class="m-2" style="padding-left:20px;">
                                    <input type="checkbox" aria-label="Checkbox for following text input"> Lain-lain , ...... Kg
                                </p>
                            @endif
                            
                        </td>
                    </tr>
                    <tr height="130px">
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
                                 {{ $item->catatan_staf_muda }}
                            </p>
                        </td>
                        <td colspan="3">
                            <p class="text-center">
                                 Staf Muda I/II
                            </p>
                        </td>
                    </tr>

                    <tr height="130px">
                        <td colspan="5">
                            <p class="mb-0">
                                 <u>Pendapat Staf Muda / VP * :</u>
                            </p>
                            <p>
                                {{ $item->catatan_vp }}
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