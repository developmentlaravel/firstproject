<h5 class="card-header">Comments  </h5>
            <span class="comment-count btn btn-sm btn-outline-info">{{ count($article->comments) }}</span>
            <small class="float-right"></small>
                <span title="Likes" id="saveLikeDislike" data-type="like" data-comment="{{ $comment->id}}" class="mr-2 btn btn-sm btn-outline-primary d-inline font-weight-bold">
                    Like
                    <span class="like-count">{{ $comment->likes() }}</span>
                </span>
                <span title="Dislikes" id="saveLikeDislike" data-type="dislike" data-type="dislike" data-comment="{{ $comment->id}}" class="mr-2 btn btn-sm btn-outline-danger d-inline font-weight-bold">
                    Dislike
                    <span class="dislike-count">{{ $comment->dislikes() }}</span>
                </span>


