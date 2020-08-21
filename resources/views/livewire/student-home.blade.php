<div class="container">
    <br/>
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <form >
                <div class="card-body row no-gutters align-items-center">
                    <div class="col-auto">
                        <i class="fas fa-search h4 text-body"></i>
                    </div>
                    <!--end of col-->
                    <div class="col">
                        <input class="form-control form-control-lg form-control-borderless" type="search" wire:model.debounce.500ms="searchInput.searchInputData" wire:keydown.debounce.700ms="searchLike" placeholder="Search a book...">
                    </div>
                    <div class="col-1"></div>
                    <!--end of col-->
                    <div class="col-auto">
                        <button class="btn btn-lg btn-success" type="submit">Search</button>
                    </div>
                    <!--end of col-->
                </div>
            </form>
        </div>

        <!--end of col-->
    </div>

{{--    @foreach($searchResult as $key=>$result)--}}
    <div class="row">
        <div class="col-2"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h4>{{ $searchResult }}</h4>
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
{{--    @endforeach--}}


    <h1></h1>
</div>
