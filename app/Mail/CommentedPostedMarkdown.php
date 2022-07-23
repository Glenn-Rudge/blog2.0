<?php

    namespace App\Mail;

    use App\Models\Comment;
    use Illuminate\Bus\Queueable;
    use Illuminate\Mail\Mailable;
    use Illuminate\Queue\SerializesModels;

    class CommentedPostedMarkdown extends Mailable
    {
        public Comment $comment;

        use Queueable, SerializesModels;

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
                ->subject($subject)
                ->markdown('emails.posts.commented-markdown');
        }
    }
