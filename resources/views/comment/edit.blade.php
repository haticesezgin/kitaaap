@extends('front.website.master')
@section('title')
    post
@endsection
@section('content')
    <div align="center"</div>
    <section class="site-section py-lg">
        <div class="container">
            <div class="col-md-12 col-lg-8 main-content">
                <div class="comment-form-wrap pt-5">
                    <h3 class="mb-5">Yorumunu Bırak</h3>
                    <div action="#" class="p-5 bg-light">
                        <div class="form-group">
                            <div class="text-lg-left"</div>
                            <label for="name">Ad</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="text-lg-left"</div>
                        <div class="form-group">
                            <label for="email">Email </label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <div class="text-lg-left"</div>
                            <label for="message">Yorumunuz</label>
                            <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                         <div class="text-center"
                        <div class="form-group">
                            <input type="submit" value="Yorumu Düzenle" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-4 sidebar">
            <div class="sidebar-box search-form-wrap">
                <form action="#" class="search-form">
                    <div class="form-group">
                        <span class="icon fa fa-search"></span>
                        <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
