<table class="table">
    <thead>
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('update.page', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('delete.user', $user->id) }}" method="POST"
                      style="display:inline-block"
                      onsubmit="return confirm('Are you sure you want to delete this user?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
