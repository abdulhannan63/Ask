<div class="container d-flex justify-content-center align-items-center mt-5">
    <div class="w-100" style="max-width: 400px;">
        <h1>Login</h1>
      <form method="post" action="./server/requests.php">
        <div class="mb-1">
          <label for="email" class="form-label">Email address</label>
          <input 
            type="email" 
            class="form-control" 
            name="email"
            id="email" 
            required
          >
        </div>

        <div class="mb-1">
          <label for="password" class="form-label">Password</label>
          <input 
            type="password" 
            class="form-control" 
            name="password"
            id="password"
            required
          >
        </div>
        <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
      </form>
    </div>
  </div>