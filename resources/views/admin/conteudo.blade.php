@extends('layouts.app')

@section('css')
@parent
<link rel="stylesheet" href="/ckeditor/contents.css">
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Conteúdo</div>

                <div class="panel-body">
                    <form>
			            <textarea name="editor1" id="editor1" rows="10" cols="80">
			                Esta Text Area será substituída pelo CKEditor.
			            </textarea>
			        </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
@parent
<script src="/ckeditor/ckeditor.js"></script>
<script>CKEDITOR.replace('editor1');</script>
@stop
