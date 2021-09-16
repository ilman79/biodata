@extends('layout.template')
@section('title', 'Biodata Me')

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Biodata Me</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                title="Collapse">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        <table>
            <tr>
                <th width='200px'>Nama Lengkap</th>
                <th width='30px'>:</th>
                <th> ILMAN GIFARI</th>
            </tr>
        </table>
    </div>
    <div class="box-body">
        <table>
            <tr>
                <th width='200px'>Tempat Tanggal Lahir</th>
                <th width='30px'>:</th>
                <th>Tangerang, 30 Desember 2001</th>
            </tr>
        </table>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <table>
            <tr>
                <th width='200px'>Angkatan</th>
                <th width='30px'>:</th>
                <th>2020</th>
            </tr>
        </table>

    </div>
    <div class="box-footer">
        <table>
            <tr>
                <th width='200px'>Pengalaman Organisasi</th>
                <th width='30px'>:</th>
                <th>
                    <ul>
                        <li>
                            Anggota Tingkat 1 di Himatika
                        </li>
                        <li>
                            Mengikuti kepanitian menjadi danus MCC 2021
                        </li>
                        <li>
                            Mengikuti kepanitian menjadi danus Interval 2021
                        </li>
                    </ul>
                </th>
            </tr>
        </table>

    </div>
    <div class="box-footer">
        <table>
            <tr>
                <th width='200px'>Pengalaman kuliah Online</th>
                <th width='30px'>:</th>
                <th>ga ada, seru seru aja sih wkkwwkwk..,</th>
            </tr>
        </table>

    </div>
    <div class="box-footer">
        <table>
            <tr>
                <th width='200px'>Foto</th>
                <th width='30px'>:</th>
                <th><a href="https://drive.google.com/file/d/1Fo0B7NkdwOR10hj_NKbS0y5SsOrJAXCU/view?usp=sharing" target='_blank'>download</a>
                        
                </th>
            </tr>
        </table>
    </div>

     <div class="box-body">
        <h2> Semangat Teoremanya gaiss,, ^_^</h2>
     </div>
    <!-- /.box-footer-->
</div>
@endsection
