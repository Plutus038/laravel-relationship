@foreach($record as $rec)
    <ul>
        <li>id => {{ $rec->id }}</li>
        <li>user_id => {{ $rec->user_id }}</li>
        <li>name => {{ $rec->name }}</li>
        <li>title => {{ $rec->title }}</li>
        <li>active => {{ $rec->active }}</li>
        <li>body => {{ $rec->body }}</li>
        <li>created_at => {{ $rec->created_at }}</li>
        <li>updated_at => {{ $rec->updated_at }}</li>
    </ul>
@endforeach