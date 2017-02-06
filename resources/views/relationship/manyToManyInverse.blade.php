@foreach($record as $rec)
    <ul>
        {{--<li>id => {{ $rec->id }}</li>
        <li>pivot_user_id => {{ $rec->pivot_user_id }}</li>
        <li>pivot_role_id => {{ $rec->pivot_role_id }}</li>
        <li>created_at => {{ $rec->created_at }}</li>
        <li>updated_at => {{ $rec->updated_at }}</li>--}}
        <ul>
            <li>id => {{ $rec->pivot->name }}</li>{{--
            <li>role_id => {{ $rec->pivot->role_id }}</li>
            <li>name => {{ $rec->pivot->name }}</li>
            <li>country_id => {{ $rec->pivot->country_id }}</li>
            <li>email => {{ $rec['pivot']->email }}</li>
            <li>created_at => {{ $rec->pivot->created_at }}</li>
            <li>updated_at => {{ $rec->pivot->updated_at }}</li>--}}
        </ul>
    </ul>
@endforeach