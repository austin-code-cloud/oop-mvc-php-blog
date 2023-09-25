<?php

class Panel extends Controller
{
    public function BlogPosts ()
    {
        $this->views('panel/blogPost');
    }
    public function PostComment ()
    {
        $this->views('panel/postComment');
    }
    public function categories ()
    {
        $this->views('panel/categories');
    }
    public function Authors ()
    {
        $this->views('panel/authors');
    }
    public function Profile ()
    {
        $this->views('panel/profile');
    }
    public function AddNewPost ()
    {
        $this->views('panel/addNewPost');
    }
    public function calender ()
    {
        $this->views('panel/calender');
    }
    public function chat ()
    {
        $this->views('panel/chat');
    }
    public function emailInbox ()
    {
        $this->views('panel/emailInbox');
    }
    public function readEmail ()
    {
        $this->views('panel/readEmail');
    }
}

