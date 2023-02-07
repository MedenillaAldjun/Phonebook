<table class="table table-striped">
  <thead>
    <tr>
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contacts as $contact)
    <tr>
      <td>{{ $contact->name }}</td>
      <td>{{ $contact->email }}</td>
      <td>{{ $contact->phone }}</td>
      <td>
        <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display: inline-block;">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="{{ route('contacts.create') }}" class="btn btn-success">Add Contact</a>
