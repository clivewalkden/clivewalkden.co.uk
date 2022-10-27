@php
$image = "https://www.clivewalkden.co.uk/assets/images/blog/articles/".(($page->hero) ?: $category->seo_link) . '.jpg';
$date = date('F j, Y', $page->published);
$content = strip_tags($page->getContent());
$seoData = [
    '@context' => 'https://schema.org',
    "@type" => "BlogPosting",
    "headline" => "$page->title",
    "description" => "$page->short_intro",
    "datePublished" => "$date",
    "mainEntityOfPage" => "True",
    "image" => [
        "@type" => "imageObject",
        "url" => "$image",
        "height" => "600",
        "width" => "800"
    ],
    "publisher" => [
        "@type" => "Organization",
        "name" => "Clive Walkden",
        "logo" => [
            "@type" => "imageObject",
            "url" => "https://www.clivewalkden.co.uk/assets/images/blog/categories/general.jpg"
        ]
    ],
    "author" => [
        "@type" => "Person",
        "name" => "$page->author",
        "url" => "https://clivewalkden.co.uk/about/"
    ],
    "articleBody" => "$content"
];
@endphp
<script type="application/ld+json">
@php
    echo json_encode($seoData, JSON_PRETTY_PRINT);
@endphp
</script>