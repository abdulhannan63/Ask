<div class="container d-flex justify-content-center align-items-center mt-5">
    <div class="w-100" style="max-width: 400px;">
        <h1>Sign Up</h1>
      <form method="post" action="./server/requests.php">
        <div class="mb-1">
          <label for="username" class="form-label">Your Name</label>
          <input 
            type="text" 
            name="username"
            class="form-control" 
            id="username" 
            required
          >
        </div>
        <div class="mb-1">
          <label for="email" class="form-label">Email address</label>
          <input 
            type="email" 
            name="email"
            class="form-control" 
            id="email" 
            required
          >
        </div>

        <div class="mb-1">
          <label for="password" class="form-label">Password</label>
          <input 
            type="password" 
            name="password"
            class="form-control" 
            id="password"
            required
          >
        </div>
        <button type="submit" class="btn btn-primary w-100" name="signup">Submit</button>
      </form>
    </div>
  </div>