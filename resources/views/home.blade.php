@foreach ($users as $user)
    {{ $user->name }} - {{ $user->email }} - {{ $user->age }} - {{ $user->city }} . "<br/>"
@endforeach