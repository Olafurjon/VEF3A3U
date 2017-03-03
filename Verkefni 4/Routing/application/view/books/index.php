<div class="container">
    <h1>Bækur</h1>
    <h2>Þú ert í Viewinu: application/view/book/index.php (Allt sem er í þessu boxi, kemur frá þeirri skrá)</h2>
    <!-- Bæta við bók -->
    <div class="box">
        <h3>Bæta við bók</h3>
        <form action="<?php echo URL; ?>books/addbook" method="POST">
            <label>Name</label>
            <input type="VARCHAR" name="name" value="" required />
            <label>Publisher</label>
            <input type="VARCHAR" name="publisher" value="" required />
            <label>Year</label>
            <input type="DATE" name="year" value="" />
            <label>Description</label>
            <input type="text" name="description" value="" />
            <input type="submit" name="submit_add_book" value="Submit" />
        </form>
    </div>
    <!-- Aðal outputtið -->
    <div class="box">
        <h3>Amount of books: <?php echo $amount_of_books; ?></h3>
        <h3>List of books (data from model)</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Publisher</td>
                <td>Year</td>
                <td>Description</td>
                <td>Delete</td>
                <td>EDIT</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($books as $book) { ?>
                <tr>
                    <td><?php if (isset($book->book_id)) echo htmlspecialchars($book->book_id, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($book->name)) echo htmlspecialchars($book->name, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($book->publisher)) echo htmlspecialchars($book->publisher, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($book->year)) echo htmlspecialchars($book->year, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php if (isset($book->description)) echo htmlspecialchars($book->description, ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><a href="<?php echo URL . 'books/deletebook/' . htmlspecialchars($book->book_id, ENT_QUOTES, 'UTF-8'); ?>">Delete</a></td>
                    <td><a href="<?php echo URL . 'books/editbook/' . htmlspecialchars($book->book_id, ENT_QUOTES, 'UTF-8'); ?>">edit</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
