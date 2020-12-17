

@extends('layout')

@section('contents')

<div class='wrapper'>
<div id='page' class='container'>


    <form  method="post" action="/listarticles" enctype="multipart/form-data">
        @csrf

             <div class="row">
                 <label class="label" for="title">Title</label>
                 <div class="col col-md-6">
                 <input class="input @error('title') is-invalid  @enderror" type="text" name="title" id="title" value="">
            @error('title')
            <p class="help is-danger">{{ $message }}</p>@enderror
                </div></div>
        <div class="field">
                 <label class="label" for="excerpt">Excerpt</label>
                 <div class="control">
                 <textarea class="textarea @error('excerpt') is-invalid  @enderror" type="text" name="excerpt" id="excerpt"></textarea>
                 @error('excerpt')
                 <p class="help is-danger">{{ $message }}</p>@enderror
                 </div></div>
        <div class="field">
                 <label class="label" for="body">Body</label>
                <div class="control">
                 <textarea class="textarea @error('body') is-invalid  @enderror" type="text" name="body" id="body" ></textarea>

                 {{-- <textarea class="textarea" type="text" name="body" id="body" ></textarea> --}}


                 @error('body')
                 <p class="help is-danger">{{ $message }}</p>@enderror
                 </div></div>
             <div class="field">
                 <label class="label" for="file">Uploadfile</label>
                 <div class="control">
                 <input class="input @error('image') is-danger @enderror" type="file" name="image" id="image" >
                 @error('image')
                 <p class="help is-danger">{{ $message }}</p>@enderror
             </div></div>
        <div class="field is-group">
            <div class="control">
                 <button type="submit" class="bottun is-link" >submit</button>
             </div></div>

    </form>
    </div>
    </div>
















{{--  <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="page-header">
                <h3>My Favorites</h3>
            </div>
            @forelse ($myFavorites as $myFavorite)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $myFavorite->title }}
                    </div>

                    <div class="panel-body">
                        {{ $myFavorite->body }}
                    </div>
                    @if (Auth::check())
                        <div class="panel-footer">
                            <favorite
                                :post={{ $myFavorite->id }}
                                :favorited={{ $myFavorite->favorited() ? 'true' : 'false' }}
                            ></favorite>
                        </div>
                    @endif
                </div>
            @empty
                <p>You have no favorite posts.</p>
            @endforelse
         </div>
    </div>
</div>  --}}



{{--
    <template>
        <span>
            <a href="#" v-if="isFavorited" @click.prevent="unFavorite(post)">
                <i  class="fa fa-heart"></i>
            </a>
            <a href="#" v-else @click.prevent="favorite(post)">
                <i  class="fa fa-heart-o"></i>
            </a>
        </span>
    </template>

    <script>
        export default {
            props: ['post', 'favorited'],

            data: function() {
                return {
                    isFavorited: '',
                }
            },

            mounted() {
                this.isFavorited = this.isFavorite ? true : false;
            },

            computed: {
                isFavorite() {
                    return this.favorited;
                },
            },

            methods: {
                favorite(post) {
                    axios.post('/favorite/'+post)
                        .then(response => this.isFavorited = true)
                        .catch(response => console.log(response.data));
                },

                unFavorite(post) {
                    axios.post('/unfavorite/'+post)
                        .then(response => this.isFavorited = false)
                        .catch(response => console.log(response.data));
                }
            }
        }
    </script>  --}}


{{--
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Post</div>
                    <div class="card-body">
                        <form method="post" action="{{ route('post.store') }}">
                            <div class="form-group">
                                @csrf
                                <label class="label">Post Title: </label>
                                <input type="text" name="title" class="form-control" required/>
                            </div>
                            <div class="form-group">
                                <label class="label">Post Body: </label>
                                <textarea name="body" rows="10" cols="30" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}






















@endsection
