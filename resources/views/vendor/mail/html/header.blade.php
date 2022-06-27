<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<div style="width: 100px; border: 2px solid blue;"></div>
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
