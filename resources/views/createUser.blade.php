<form action="{{ route('resources.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <input type="number" name="age" placeholder="Age">
    <input type="text" name="city" placeholder="City">
    <button type="submit">Create User</button>
</form>