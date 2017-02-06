@foreach($record as $rec)
    <ul>
        <li>id => {{ $rec['id'] }}</li>
        <li>post_id => {{ $rec['post_id'] }}</li>
        <li>comments => {{ $rec['comments'] }}</li>
        <li>created_at => {{ $rec['created_at'] }}</li>
        <li>updated_at => {{ $rec['updated_at'] }}</li>
    </ul>
@endforeach