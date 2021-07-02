@foreach ($list_css as $key=>$value)
	<link rel="stylesheet" href="{{_WEB_ROOT.'/public/admin/css/'.$value}}">
@endforeach