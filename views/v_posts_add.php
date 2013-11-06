<form method='POST' action='/posts/p_add'>

    <label for='content'>New Post:</label><br>
    <textarea name='content' id='content'></textarea>

    <br><br>

    <?php if(isset($error)): ?>
    <div>
          Error: Complete all the fields and try again.
    <div>
    <?php endif; ?>

    <input type='submit' value='Submit'>

</form>

 