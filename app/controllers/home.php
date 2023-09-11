<?php

class Home extends Controller
{

    public function tags()
    {

        $this->views('tags');
    }
    public function authors()
    {

        $this->views('authors');
    }
    public function signin()
    {

        $this->views('signin');
    }
    public function signup()
    {

        $this->views('signup');
    }
    public function membership()
    {
        $this->views('membership');
    }
    public function singlepost()
    {
        $this->views('singlepost');
    }
    public function categorypost()
    {
        $this->views('categorypost');
    }
}
