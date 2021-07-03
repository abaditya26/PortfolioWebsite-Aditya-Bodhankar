<?php include "./header.php"; ?>

<div class="container" style="max-width: 800px;">
    <br>
    <center>
        <h3>
            Add Project
        </h3>
    </center>
    <form action="./add-project.php" method="post">
        <div class="form-group">
            <label for="title">Title Of Project</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Enter Title Of Project" required>
        </div><br>
        <div class="form-group">
            <label for="description">Description Of Project</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Enter Description Of Project"></textarea>
        </div><br>
        <div class="form-group">
            <label for="link">Link Of the Project</label>
            <input type="url" name="link" id="link" class="form-control" required placeholder="Enter URL of Site">
        </div><br>
        <div class="form-group">
            <label for="coverImage">Select Cover Image</label><br>
            <input type="file" name="coverImage" id="coverImage" required>
        </div><br>
        <div class="form-group">
            <input type="submit" value="Add Project" class="btn btn-success">
            <input type="reset" value="Reset Form" class="btn btn-danger">
        </div>
    </form>
</div>
<br>
</body>

</html>