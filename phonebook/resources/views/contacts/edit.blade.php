<form action="{{ route('contacts.update', $contact->id) }}" method="POST">
  @csrf
  @method('PATCH')
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ $contact->name }}">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email" value="{{ $contact->email }}">
  </div>
  <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="text" class="form-control" id="phone" name="phone" value="{{ $contact->phone }}">
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
