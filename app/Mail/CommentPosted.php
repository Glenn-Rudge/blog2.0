<?php

    namespace App\Mail;

    use App\Models\Comment;
    use Illuminate\Bus\Queueable;
    use Illuminate\Mail\Mailable;
    use Illuminate\Queue\SerializesModels;

    class CommentPosted extends Mailable
    {
        use Queueable, SerializesModels;

        public Comment $comment;

        /**
         * Create a new message instance.
         *
         * @return void
         */
        public function __construct(Comment $comment)
        {
            $this->comment = $comment;
        }

        /**
         * Build the message.
         *
         * @return $this
         */
        public function build()
        {
            $subject = "Comment was posted on your {$this->comment->commentable->title} blog post";

            return $this
//                ->attach(
//                    storage_path("app/public")."/".$this->comment->user->image->path,
//                    [
//                        "as" => "profile_picture.jpg",
//                        "mime" => "image/jpg",
//                    ]
//                )
//                ->attachFromStorage($this->comment->user->image->path, "profile_picture.jpeg")
//                ->attachData(Storage::get($this->comment->user->image->path), "profile_picture_from_data.jpeg", [
//                    "mime" => "image/jpeg"
//                ])
                ->subject($subject)
                ->view("emails.posts.commented");
        }
    }
