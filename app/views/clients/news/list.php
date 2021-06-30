<h1>DANH SÁCH TIN TỨC</h1>
{{ $new_title }}<br/>
{{ $new_content }}<br/>
{{ 'Unicode' }}<br/>
{{toSlug('Tiêu đề bài viết')}}<br/>
{! $new_author !}<br/>
{{!empty($page_title)?$page_title:'Không có gì'}}<br/>
{{md5('123456')}}<br/>
@if (!empty($new_author))
<p>Tên tác giả: {{$new_author}}</p>
@else
<p>Không có gì</p>
@endif

@if (md5('123456')!='')
<h4>MD5: {{md5('123456')}}</h4>
@endif
@php
$number = 1;
$number++;
$total = $number+10;
$data = [
    'Item 1',
    'Item 2',
    'Item 3'
];
@endphp
{{$total}}<br/>
@for ($i = 0; $i<count($data); $i++)
<p>{{$data[$i]}}</p>
@endfor

@php
$i = 0;
@endphp
@while ($i<=10)
<p>{{$i}}</p>
@php
$i++
@endphp
@endwhile

@foreach ($data as $key=>$value)
<p>Key = {{$key}} - Value = {{$value}}</p>
@endforeach