<?php

    namespace App\Jobs;

    use App\Mail\CommentPosted;
    use App\Models\Comment;
    use App\Models\User;
    use Illuminate\Bus\Queueable;
    use Illuminate\Foundation\Bus\Dispatchable;
    use Illuminate\Queue\InteractsWithQueue;
    use Illuminate\Queue\SerializesModels;
    use Illuminate\Support\Facades\Mail;

    class NotifyUsersPostWasCommented
    {
        use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

        public Comment $comment;

        /**
         * Create a new job instance.
         *
         * @return void
         */
        public function __construct(Comment $comment)
        {
            $this->comment = $comment;
        }

        /**
         * Execute the job.
         *
         * @return void
         */
        public function handle()
        {
            $now = now();

            User::thatHasCommentedOnPost($this->comment->commentable)
                ->get()
                ->filter(function (User $user) {
                    return $user->id !== $this->comment->user_id;
                })->map(function (User $user) use ($now) {
                    Mail::to($user)->later(
                        $now->addSeconds(6),
                        new CommentPosted($this->comment, $user)
                    );
                });
        }
    }
