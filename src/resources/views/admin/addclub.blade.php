<div class="container">
  <h2>代表者追加</h2>
  @if(session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
  @endif
  <form method="post" action="{{ url('/admin/addclub') }}">
      @csrf
      <div class="form-group">
          <label for="name">名前</label>
          <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group">
          <label for="email">メールアドレス</label>
          <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
          <label for="circle_name">サークル名</label>
          <input type="text" class="form-control" id="circle_name" name="circle_name" required>
      </div>
      <div class="form-group">
          <label for="password">パスワード</label>
          <input type="password" class="form-control" id="password" name="password" required>
      </div>

      <button type="submit" class="btn btn-primary">追加</button>
  </form>
</div>