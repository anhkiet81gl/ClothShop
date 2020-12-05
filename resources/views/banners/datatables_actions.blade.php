{!! Form::open(['route' => ['banners.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('banners.show', $id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
    <a href="{{ route('banners.edit', $id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>
    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Bạn thật sự muốn xóa banner này ?')"
    ]) !!}
</div>
{!! Form::close() !!}
