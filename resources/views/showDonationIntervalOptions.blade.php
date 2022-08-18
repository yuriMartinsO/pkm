@foreach (App\Models\Donor::DONATION_INTERVALS as $key => $value)
    <option value="{{$key}}">{{$value}}</option>
@endforeach