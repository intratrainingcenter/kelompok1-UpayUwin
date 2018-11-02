@extends('interface_frontend.index_shop')
@extends('interface_frontend.frontend_shop.item.additional')
@section('content')

<div class="row">
    <div class="col-sm-3 filter-by-block">
        <div class="panel-group" id="accordion-v2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion-v2" href="#collapseTwo">
                            Sort by
                            <i class="fa fa-angle-down"></i>
                        </a>
                    </h2>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <form id="formSort">
                            <select name="sort" class="form-control" id="sortby">
                                <option value="new">Newest</option>
                                <option value="old">Oldest</option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-9" id="hasil">
        <div class="row ">
            <div class="col-sm-4 result-category">
                <h2></h2>
                <small class="shop-bg-red badge-results" id="count"></small><br><br>
            </div>
        </div>
        <div class="filter-results">
            <div class="row illustration-v2" id="load">
            </div>
        </div>
    </div>
</div>
@endsection