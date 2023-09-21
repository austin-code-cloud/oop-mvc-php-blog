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
}

