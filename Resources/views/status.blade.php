@extends(Theme::wrapper(), ['title' => __('Network Status'), 'keywords' => 'WemX Dashboard, WemX Panel'])
@section('title', __('Network Status'))
@section('keywords', 'WemX Dashboard, WemX Panel')

@section('container')
    <section class="bg-white dark:bg-gray-900">
        <div class="">
            <div>
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Network Status</h2>
            </div>
        </div><br>

        <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/davidjbradshaw/iframe-resizer@master/js/iframeResizer.min.js"></script>
        <iframe class="htframe" src="https://wl.hetrixtools.com/r/2f266905f74a9b4410b60c5c43234f95/" width="100%" scrolling="no" style="border:none;" sandbox="allow-scripts allow-same-origin allow-popups" onload="iFrameResize([{log:false}],'.htframe')"></iframe>
    </section>


@endsection
