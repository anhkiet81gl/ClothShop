{!! Form::open(['route' => ['customers.destroy', $id], 'method' => 'delete']) !!}
<div class='btn-group'>
    <a href="{{ route('customers.show', $id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-eye-open"></i>
    </a>
    <a href="{{ route('customers.edit', $id) }}" class='btn btn-default btn-xs'>
        <i class="glyphicon glyphicon-edit"></i>
    </a>
    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', [
        'type' => 'submit',
        'class' => 'btn btn-danger btn-xs',
        'onclick' => "return confirm('Bạn có thật sự muốn xóa tài khoản này?')"
    ]) !!}
</div>
{!! Form::close() !!}
