<?php

/**
 * Class booksController
 * This is a demo Controller class.
 *
 * If you want, you can use multiple Models or Controllers.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */

namespace Mini\Controller;

use Mini\Model\Book;

class BooksController
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/books/index
     */
    public function index()
    {
        // Instance new Model (book)
        $book = new Book();
        // getting all books and amount of books
        $books = $book->getallBooks();
        $amount_of_books = $book->getAmountofBooks();

       // load views. within the views we can echo out $books and $amount_of_books easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/books/index.php';
        require APP . 'view/_templates/footer.php';
    }

    /**
     * ACTION: addbook
     * This method handles what happens when you move to http://yourproject/books/addbook
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "add a book" form on books/index
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to books/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */
    public function addbook()
    {
        // if we have POST data to create a new book entry
        if (isset($_POST["submit_add_book"])) {
            // Instance new Model (book)
            $book = new Book();
            // do addbook() in model/model.php
            $book->addbook($_POST["name"],$_POST["publisher"], $_POST["year"],  $_POST["description"]);
        }

        // where to go after book has been added
        header('location: ' . URL . 'books/index');
    }

    /**
     * ACTION: deletebook
     * This method handles what happens when you move to http://yourproject/books/deletebook
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "delete a book" button on books/index
     * directs the user after the click. This method handles all the data from the GET request (in the URL!) and then
     * redirects the user back to books/index via the last line: header(...)
     * This is an example of how to handle a GET request.
     * @param int $book_id Id of the to-delete book
     */
    public function deletebook($book_id)
    {
        // if we have an id of a book that should be deleted
        if (isset($book_id)) {
            // Instance new Model (book)
            $book = new Book();
            // do deletebook() in model/model.php
            $book->deletebook($book_id);
        }

        // where to go after book has been deleted
        header('location: ' . URL . 'books/index');
    }

     /**
     * ACTION: editbook
     * This method handles what happens when you move to http://yourproject/books/editbook
     * @param int $book_id Id of the to-edit book
     */
    public function editbook($book_id)
    {
        // if we have an id of a book that should be edited
        if (isset($book_id)) {
            // Instance new Model (book)
            $book = new Book();
            // do getbook() in model/model.php
            $book = $book->selectBook($book_id);

            // in a real application we would also check if this db entry exists and therefore show the result or
            // redirect the user to an error page or similar

            // load views. within the views we can echo out $book easily
            require APP . 'view/_templates/header.php';
            require APP . 'view/books/edit.php';
            require APP . 'view/_templates/footer.php';
        } else {
            // redirect user to books index page (as we don't have a book_id)
            header('location: ' . URL . 'books/index');
        }
    }

    /**
     * ACTION: updatebook
     * This method handles what happens when you move to http://yourproject/books/updatebook
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "update a book" form on books/edit
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to books/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */
    public function updatebook()
    {
        // if we have POST data to create a new book entry
        if (isset($_POST["submit_update_book"])) {
            // Instance new Model (book)
            $book = new Book();
            // do updatebook() from model/model.php
            $book->updatebook($_POST["name"], $_POST["publisher"],  $_POST["year"],$_POST["description"], $_POST['book_id']);
        }

        // where to go after book has been added
        header('location: ' . URL . 'books/index');
    }

    /**
     * AJAX-ACTION: ajaxGetStats
     * TODO documentation
     */
    public function ajaxGetStats()
    {
        // Instance new Model (book)
        $book = new Book();
        $amount_of_books = $book->getAmountofBooks();

        // simply echo out something. A supersimple API would be possible by echoing JSON here
        echo $amount_of_books;
    }

}
