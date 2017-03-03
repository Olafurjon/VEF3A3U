<div class="container">
    <h2>You are in the View: application/view/song/edit.php (everything in this box comes from that file)</h2>
    <!-- add Book form -->
    <div>
        <h3>Edit a Book</h3>
        <form action="<?php echo URL; ?>books/updatebook" method="POST">
            <label>Name</label>
            <input autofocus type="text" name="name" value="<?php echo htmlspecialchars($book->name, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Publisher</label>
            <input type="text" name="publisher" value="<?php echo htmlspecialchars($book->publisher, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Year</label>
            <input type="date" name="year" value="<?php echo htmlspecialchars($book->year, ENT_QUOTES, 'UTF-8'); ?>" />
            <label>Description</label>
            <input type="text" name="description" value="<?php echo htmlspecialchars($book->description, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="hidden" name="book_id" value="<?php echo htmlspecialchars($book->book_id, ENT_QUOTES, 'UTF-8'); ?>" />
            <input type="submit" name="submit_update_book" value="Update" />
        </form>
    </div>
</div>

