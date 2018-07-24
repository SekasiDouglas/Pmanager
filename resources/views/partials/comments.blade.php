<div class="row">
        <div class="col-md-12  col-sm-12  col-xs-12 col-lg-12">
            
            {{-- <!-- Fluid width widget -->         --}}
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="far fa-comment-alt"></i>
                        Recent Comments
                    </h3>
                </div>
                <div class="panel-body">
                    <ul class="media-list">
                        
                        @foreach ($comments as $comment)
                        <li class="media">
                            <div class="media-left">
                                <img src="http://placehold.it/60x60" class="img-circle">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">

                                    <a href="users/{{ $comment->user->id }}">{{ $comment->user->name }}
                                            - {{ $comment->user->email }}</a>
                                    
                                    <br>
                                    <small>
                                        commented on {{ $comment->user->created_at->diffForHumans() }}
                                    </small>
                                </h4>
                                <p>
                                    {{ $comment->body }}
                                </p>
                                <b> Proof:</b>
                               
                                <p>
                                    {{ $comment->url }}
                                </p>
                            </div>
                        </li>
                        @endforeach
                        
                    </ul>
                </div>
                
                
            </div>
        </div>
    </div>