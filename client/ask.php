<div class="container d-flex justify-content-center align-items-center mt-5">
    <div class="w-100" style="max-width: 400px;">
        <h1>Ask Question</h1>
      <form method="post" action="./server/requests.php">
        <div class="mb-1">
          <label for="title" class="form-label">Title</label>
          <input 
            type="text" 
            class="form-control" 
            name="title"
            id="title" 
            required
          >
        </div>
        <div class="mb-1">
          <label for="description" class="form-label">Description</label>
          <textarea 
            type="text" 
            class="form-control" 
            name="description"
            id="description"></textarea>
        </div>
        <div class="mb-1">
          <label for="category" class="form-label">Category</label>
          <?php
            include("category.php");
          ?>
        </div>
        <button type="submit" name="ask" class="btn btn-primary w-100">Submit</button>
      </form>
    </div>
  </div>