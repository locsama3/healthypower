@foreach ($list_js as $key=>$value)
	<script src="{{_WEB_ROOT.'/public/admin/js/'.$value}}"></script>
@endforeach