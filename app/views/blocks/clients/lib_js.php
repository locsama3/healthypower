@foreach ($list_js as $key=>$value)
	<script src="{{_WEB_ROOT.'/public/clients/js/'.$value}}"></script>
@endforeach