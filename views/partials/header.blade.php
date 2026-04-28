<header class="site-header">
  <div class="site-header__inner">
    <a class="site-brand" href="{{ evo()->makeUrl((int) evo()->getConfig('site_start')) }}">
      {{ evo()->getConfig('site_name') ?: 'Evolution CMS' }}
    </a>

    @if(!empty($menu))
      <nav class="site-nav" aria-label="Primary navigation">
        @foreach($menu as $item)
          <a
            href="{{ evo()->makeUrl((int) $item['id']) }}"
            @if(in_array((int) $item['id'], $parentIds ?? [], true)) aria-current="page" @endif
          >
            {{ $item['menutitle'] ?: $item['pagetitle'] }}
          </a>
        @endforeach
      </nav>
    @endif
  </div>
</header>
