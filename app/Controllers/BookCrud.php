<?php 
namespace App\Controllers;
use App\Models\BookModel;
use CodeIgniter\Controller;

class BookCrud extends BaseController
{
    public function index(){
        $bookModel = new BookModel();
        $data['books'] = $bookModel->orderBy('id', 'DESC')->findAll();
        return view('book_view');
    }

    public function create(){
        return view('add_book');
    }
 
    public function store() {
        $bookModel = new BookModel();
        $data = [
            'title' => $this->request->getVar('title'),
            'author'  => $this->request->getVar('author'),
        ];
        $bookModel->insert($data);
        return $this->response->redirect(site_url('/books-list'));
    }

    public function singleBook($id = null){
        $bookModel = new BookModel();
        $data['book_obj'] = $bookModel->where('id', $id)->first();
        return view('edit_book', $data);
    }

    public function update(){
        $bookModel = new BookModel();
        $id = $this->request->getVar('id');
        $data = [
          'title' => $this->request->getVar('title'),
          'author'  => $this->request->getVar('author'),
        ];
        $bookModel->update($id, $data);
        return $this->response->redirect(site_url('/books-list'));
    }
 
    public function delete($id = null){
        $bookModel = new BookModel();
        $data['book'] = $bookModel->where('id', $id)->delete($id);
        return $this->response->redirect(site_url('/books-list'));
    }    
}