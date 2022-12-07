@if($page->gafourtag)
<!-- Global site tag (gtag.js) - ga4 -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $page->gafourtag }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '{{ $page->gafourtag }}');
        </script>
        <!-- EO Global ga4 tag -->
@endif