<?php 

namespace App\Controllers;

use App\Models\Book;

class CategoryController extends BaseController
{
    public function show()
    {
        $books = Book::getByCatid(\filter_input(\INPUT_GET, 'catid'));

        /* View */
        require ("../App/Views/category/show.php");
    }

    public function details()
    {
        $BookDetails = Book::getDetails($_GET['isbn']);

        /* View */
        require ("../App/Views/category/details.php");
    }
}