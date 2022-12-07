@if($page->sirv)
<link rel="preconnect" href="https://scripts.sirv.com" crossorigin>
        <link rel="preconnect" href="{{ $page->sirv['cdn_url'] }}" crossorigin>
        <link rel="dns-prefetch" href="https://scripts.sirv.com">
        <link rel="dns-prefetch" href="{{ $page->sirv['cdn_url'] }}">
        <script src="https://scripts.sirv.com/sirv.nospin.js"></script>
@endif