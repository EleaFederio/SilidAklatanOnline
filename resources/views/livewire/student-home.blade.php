<div class="hero">
    <div class="container">
        <br/>
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <form >
                    <div class="card-body row no-gutters align-items-center">
                        <div class="col-auto">

                        </div>
                        <!--end of col-->
                        <div class="col">
                            <input class="form-control form-control-lg form-control-borderless" type="search" wire:model.debounce.500ms="searchInput.searchInputData"  placeholder="Search a book...">

                        </div>
                        <!--end of col-->
                        <div class="col-auto">
                            {{--                        <button class="btn btn-lg btn-success" type="submit">Search</button>--}}

                        </div>
                        <!--end of col-->
                    </div>
                </form>
            </div>

            <!--end of col-->
        </div>

        @for($x = 0; $x < count($searchResults); $x++ )
            <div class="col-md-4"></div>
            <div class="col-md-4" style="float: none; margin: 0 auto">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1516214104703-d870798883c5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=700&q=60" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $searchResults[$x]->title }}</h5>
                        <p class="card-text">{{ $searchResults[$x]->author }}</p>
                        <a href="" class="btn btn-outline-primary btn-sm">Borrow this book</a>
                    </div>
                </div>
                <br>
            </div>
            <div class="col-md-4"></div>
        @endfor
    </div>
</div>

