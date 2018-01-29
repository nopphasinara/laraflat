@include(layoutBreadcrumb())
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            @php $button = isset($button) ? $button : true @endphp
            @include(layoutHeader()  , ['button' => $button])
            <div class="search" >
                <div class="pull-{{ getDirection() }}">
                    @stack('header')
                </div>
                <div class="pull-{{ getDirection() }}" style="padding-{{ getDirection() }}: 10px;">
                    @stack('search')
                </div>
            </div>
            <div class="clearfix" style="margin-bottom: 20px"></div>
            <div class="body">
                {!! $table !!}
            </div>
            <div class="clearfix"></div>
            <div class="search" style="padding-bottom: 10px">
                <div class="pull-{{ getDirection() }}">
                    @stack('header')
                </div>
                <div class="pull-{{ getDirection() }}" style="padding-{{ getDirection() }}: 10px;">
                    @stack('search')
                </div>
            </div>
        </div>
    </div>
</div>