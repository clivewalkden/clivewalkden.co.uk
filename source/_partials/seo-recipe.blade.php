@php
    $date = Carbon\Carbon::parse($page->published)->toIso8601String();
    $steps = [];
    $i = 0;
    foreach(explode('|',$page->method) as $method) {
        $i++;
        $steps[] = [
            '@type' => 'HowToStep',
            'text' => $method,
            'url' => $page->getUrl()."/#step$i"
        ];
    }
    $seoData = [
      '@context' => 'https://schema.org',
      '@type' => 'Recipe',
      'name' => "$page->title",
      'image' => [
        '@type' => 'imageObject',
        'url' => "https://www.clivewalkden.co.uk/assets/images/recipes/$page->image_main",
        'height' => '600',
        'width' => '800',
      ],
      'author' => [
        '@type' => 'Person',
        'name' => 'Clive Walkden',
        'url' => 'https://clivewalkden.co.uk/about/',
      ],
      'datePublished' => "$date",
      'description' => "$page->intro",
      'prepTime' => "$page->prepTime",
      'cookTime' => "$page->cookTime",
      'totalTime' => "$page->totalTime",
      'keywords' => "$page->meta_keywords",
      'recipeYield' => "$page->servings",
      'recipeCategory' => "$page->category",
      'recipeCuisine' => "$page->cuisine",
      'recipeIngredient' => explode('|',str_replace(':',' ', $page->ingredients)),
      'recipeInstructions' => $steps,
    ]
@endphp

<script type="application/ld+json">
    @php
        echo json_encode($seoData, JSON_PRETTY_PRINT);
    @endphp
</script>