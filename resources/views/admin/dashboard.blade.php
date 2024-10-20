@extends("admin.layouts.dashboard")

@section("content")
<div class="content-wrapper container-xxl p-0">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">{{ __("title.homepage") }}</h2>
                    <div class="breadcrumb-wrapper">
                        <ol class="breadcrumb">
                            {{-- <li class="breadcrumb-item"><a href="index.html">{{ __("title.homepage") }}</a>
                            </li> --}}
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
