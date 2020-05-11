@extends('layouts.backend')

@section('title', 'Home')

@section('header')
    <h1>
        Home
    </h1>
@endsection

@section('content')
    <style>
        p {
            text-indent: 10px;
        }
    </style>
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-solid" style="padding: 20px;">
                <strong>Dashboard</strong>
                <li>Time : <?php echo date('Y-m-d H:i:s')  ?></li>
                <strong>依赖开源程序</strong>
                <ul>
                    <li>LAMP</li>
                    <li>
                        <a href="https://laravel.com/" target="_blank">Laravel</a>
                    </li>
                    <li>
                        <a href="https://www.almsaeedstudio.com" target="_blank">
                            AdminLTE
                        </a>
                    </li>
                    <li>
                        <a href="http://getbootstrap.com/" target="_blank">
                            Bootstrap
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/erusev/parsedown" target="_blank">
                            erusev/parsedown
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/sparksuite/simplemde-markdown-editor" target="_blank">
                            SimpleMDE - Markdown Editor
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/etrepat/baum" target="_blank">
                            etrepat/baum
                        </a>
                    </li>
                </ul>
{{--                <strong>关于问题反馈</strong>--}}
{{--                <p>--}}
{{--                    可以发送Email,或者在Github上反馈遇到的问题,看到后会逐一帮助解决问题，务必将问题描述清楚。--}}
{{--                </p>--}}
            </div>
        </div>
    </div>
@endsection
