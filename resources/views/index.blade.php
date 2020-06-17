@include('layouts.header')

    <div class="search-listing-wrap grid-left">
      <div class="listing-map-block">
        <div id="searchmap" class="searchmap"></div>
      </div>
      <div class="listing-wrap grey-bg">

    <!-- Category -->
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="popular-categorys">
                  <div class="popular-category"">
                    <div class="icon color-9">
                    <img src="{{ asset('storage/categories/square.svg') }}" class="img-fluid" alt="">
                    </div>
                  <h5><a href="{{ route('home') }}">All</a></h5>
                  </div>
                  @foreach($categories as $category)
                  <div class="popular-category" data-category="{{$category->id}}">
                    <a href="{{ route('category', ['category_id' => $category->id]) }}">
                    <div class="icon color-{{$loop->iteration}}">
                        <img src="{{ asset($category->icon) }}" class="img-fluid" alt="">
                    </div>
                    </a>
                  <h5><a href="{{ route('category', ['category_id' => $category->id]) }}">{{ $category->name }}</a></h5>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        <!-- Category End -->
        
        <div class="listing-search-block">
        </div>
        <div class="listing-result">
          <div class="listing-result-header">
            <h5 class="searching-for">
              @isset($singleCategory)
              @if($singleCategory !== null)
                {{ $singleCategory->name }}
              @else
              Latest Listings
              @endif
              @endisset
            </span></h5>
            <div class="search-result-view-control">
              <a href="#" class="grid-view view-change active"><i class="fas fa-th-large"></i></a>
              <a href="#" class="list-view view-change"><i class="fas fa-bars"></i></a>
            </div>
          </div>
          <div class="listing-result-block">
            <div class="row">

              @foreach($listings as $listing)
              <div class="col-md-6 result-item">
                <div class="lrn-listing-wrap">
                  <div class="listing-thumb">
                    <img src="{{ (empty($listing->cover_pic)) ? asset("storage/covers/default.jpg")  : asset($listing->cover_pic)}}" class="img-fluid" alt="">
                  </div>
                  <div class="listing-body">
                    <div class="meta">
                      <a href="#" class="avater">
                        <img src="{{ asset($listing->avatar) }}" class="img-fluid" alt="">
                      </a>
                      <a href="#" class="favourite" data-listingid="{{ $listing->id }}"><span class="ti-heart"></span></a>
                      @auth
                      <a href="{{ route('edit', ['id' => $listing->id]) }}" class="preview"><span class="ti-pencil"></span></a>
                      @endauth
                    </div>
                  <h3 class=""><a href="{{ route('listing', ['id' => $listing->id]) }}">{{ $listing->title }}</a></h3>
                    <div class="listing-location">
                      <div class="icon">
                        <i class="fas fa-map-marker-alt"></i>
                      </div>
                      <span>{{ $listing->address }}</span>
                    </div>
                    <div class="listing-category">
                    <div class="icon"><img src="{{ asset($listing->category->icon)}}" width="50%" alt=""></div>
                      <span><a href="#">{{ $listing->category->name }}</a>
                    </div>
                    <div class="listing-bottom">
                      <span><a href="tel:{{ $listing->phone }}"><i class="fas fa-phone"></i>{{ $listing->phone }}</a></span>
                      <div>
                      @if($listing->socials)
                        @foreach($listing->socials as $social)
                        <span><a href="{{ $social->value }}"><i class="{{ $listing->socialClass($social->name) }}"></i></a></span>
                        @endforeach
                      @endif
                      @if($listing->website)
                        <span><a href="{{ $listing->website->value }}"><i class="{{ $listing->socialClass('website') }}"></i></a></span>
                      @endif
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach

            </div>
            @if($listings instanceof \Illuminate\Pagination\AbstractPaginator)
            <div class="row">
              <div class="col">
                <nav class="navigation pagination mar-10 justify-content-center">
                  <div class="nav-links">
                    {{ $listings->links() }}
                  </div>
                </nav>
              </div>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>


<script type="text/javascript">

  var categoryIcons = {
    @foreach($categories as $category)
      {{$category->id}} : "{{ $category->icon }}",
    @endforeach
  };

  var infoData = (name, address, cover, phone) => { 
    return `<div class="listing-map-popup">
    <div class="thumb"><img src="${cover}" class="img-fluid" alt=""</div>
    <div class="body"><h5><a href="#">${name}</a></h5>
      <p><i class="fas fa-map-marker-alt"></i>${address}</p>
      <br/>
      <p><i class="fas fa-phone"></i>${phone}</p>
      </div>
      </div>`
    };

    var addressPoints;

  var addressPoints = [
    @foreach($listings as $listing)
       [
       "{{ $listing['latitude'] }}", 
       "{{ $listing['longitude'] }}", 
       infoData('{{$listing['title']}}', '{{ $listing['address'] }}', '{{ asset($listing['cover_pic']) }}', '{{ $listing['phone'] }}'),
       "{{ $listing->category_id }}"
      ],
    @endforeach
  ];

</script>

@include('layouts.footer')