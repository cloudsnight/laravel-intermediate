<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

// Menggunakan Model Blog
use App\Models\Blog;

class BlogPosted extends Mailable
{
    use Queueable, SerializesModels;
    // buat variabel blog globally
    public $blog;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->blog merupakan variabel global yg didecalasikan; Sementara $blog diambil dari parameter construct
        $all = Blog::all();
        $this->blog = $all->last();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // default from email ada di folder config/Mail.php
        return $this->from('awanmalam@admin.com')->view('emails.blog');
    }
}
