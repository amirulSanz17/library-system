<form action="{{ route('members.update', $member) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $member->name }}">
    <input type="text" name="email" value="{{ $member->email }}">
    <input type="text" name="address" value="{{ $member->address }}">

    <button type="submit">
        Update
    </button>
</form>