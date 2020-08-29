@include('layouts.header')
    <div class="grey-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <nav class="listing-breadcrumb" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Listings</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $listing->title }}</li>
              </ol>
            </nav>
          </div>
          <div class="col-lg-6">
            <div class="listing-details-meta">
              <div class="save">
                <a href="#" data-listingid="{{ $listing->id }}"><i class="far fa-heart"></i>Favorite</a>
              </div>
              {{-- <div class="listing-share">
                <a href="#" class="listing-share-button"><i class="fas fa-share-alt"></i>Share</a>
                <div class="share-icons">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                  <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
              </div> --}}
              {{-- <div class="report-listing">
                <a href="#"><i class="fas fa-ellipsis-v"></i></a>
                <span class="report">
                  <a href="#"><i class="fas fa-flag"></i>Report Listing</a>
                </span>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="grey-bg section-border-top section-border-bottom">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="listing-details-header">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <div class="listing-header">
                    <div class="thumb">
                    <img src="{{ asset($listing->avatar) }}" class="img-fluid" alt="{{ $listing->title }}">
                    </div>
                    <div class="body">
                      <h3>{{ $listing->title }}</h3>
                      <span class="location"><i class="fas fa-map-marker-alt"></i>{{ $listing->address }}</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Listing Details -->
    <div class="padding-top-60 section-padding-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">

            @if($listing->attributes->where('name', 'video')->count())
            <div class="listing-details-section listing-video">
              <div id="video-player" data-plyr-provider="youtube" data-plyr-embed-id="{{ $listing->video->value ?? '' }}"></div>
            </div>
            @endif
            
            @if($listing->attributes->where('name', 'about')->count())
            <div class="listing-details-section listing-about">
              <h4>About</h4>
              <p>{!! $listing->attributes->where('name', 'about')->first()->value ?? '' !!}</p>
            </div>
            @endif
            {{-- <div class="listing-details-section listing-faq">
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What we are?</button>
                    </h5>
                  </div>
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Why choose our restuarant?</button>
                    </h5>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                      <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">What we offer for you?</button>
                    </h5>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                      <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}
            {{-- <div class="listing-details-section listing-review">
              <h4>2 Reviews for: Golden Restuarant</h4>
              <div class="listing-review-block">
                <div class="review-header">
                  <div class="thumb">
                    <img src="images/listing/customer-1.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="header-info">
                    <h5>Benjamin Vail</h5>
                    <span class="review-date">15 May, 2018</span>
                  </div>
                  <div class="review-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                  </div>
                </div>
                <div class="review-body">
                  <h5 class="review-title">“Amazing Customer Support”</h5>
                  <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores</p>
                  <div class="review-photos">
                    <div class="review-photo">
                      <img src="images/listing/review-1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="review-photo">
                      <img src="images/listing/review-2.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="review-photo">
                      <img src="images/listing/review-3.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="more-photo">
                      <span>+10</span>
                    </div>
                  </div>
                  <div class="review-raction">
                    <a href="#" class="review-like"><i class="far fa-thumbs-up"></i><span>150</span></a>
                    <a href="#" class="review-dislike"><i class="far fa-thumbs-down"></i><span>46</span></a>
                  </div>
                </div>
              </div>
              <div class="listing-review-block">
                <div class="review-header">
                  <div class="thumb">
                    <img src="images/listing/customer-2.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="header-info">
                    <h5>Timmy Murphy</h5>
                    <span class="review-date">20 August, 2018</span>
                  </div>
                  <div class="review-rating">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </div>
                <div class="review-body">
                  <h5 class="review-title">“Testy Food”</h5>
                  <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores</p>
                  <div class="review-photos">
                    <div class="review-photo">
                      <img src="images/listing/review-1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="review-photo">
                      <img src="images/listing/review-2.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="review-photo">
                      <img src="images/listing/review-3.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="more-photo">
                      <span>+10</span>
                    </div>
                  </div>
                  <div class="review-raction">
                    <a href="#" class="review-like"><i class="far fa-thumbs-up"></i><span>150</span></a>
                    <a href="#" class="review-dislike"><i class="far fa-thumbs-down"></i><span>46</span></a>
                  </div>
                </div>
              </div>
            </div> --}}
            {{-- <div class="listing-details-section listing-write-review">
              <h4>Rate us & Write a Review</h4>
              <form action="#">
                <div class="row">
                  <div class="col-md-6">
                    <div class="rating-block">
                      <p>Your rating for this listing:</p>
                      <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="image-upload-block">
                      <p>Upload Images:</p>
                      <div class="form-group">
                        <label>
                          <i class="fas fa-upload"></i>
                          <input type="file" class="form-control-file">
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Your Address">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Review Title">
                </div>
                <div class="form-group">
                  <textarea class="form-control" placeholder="Your Review"></textarea>
                </div>
                <button class="button">Submit Review</button>
              </form>
            </div> --}}
          </div>
          <div class="col-lg-4">
            <div class="listing-details-sidebar">
              <div class="widget contact-widget">
                {{-- <div class="cp-map widget-map" id="location" data-lat="40.713355" data-lng="-74.005535" data-zoom="10"></div> --}}
                <div class="contact-widget-block">
                  <ul>
                    
                    <li><span><i class="fas fa-map-marker-alt"></i>Address:</span>{{ $listing->address }}</li>
                    <li>
                      <span><i class="fas fa-phone"></i>Phone:</span>{{ $listing->phone }}
                      @if($listing->phone2)
                      , {{ $listing->phone2->value }}
                      @endif
                      @if($listing->phone3)
                      , {{ $listing->phone3->value }}
                      @endif
                    </li>
                    @if($listing->attributes->where('name', 'email')->count())
                    <li><span><i class="far fa-envelope"></i>Mail:</span>{{ $listing->attributes->where('name', 'email')->first()->value ?? '' }}</li>
                    @endif
                    @if($listing->attributes->where('name', 'website')->count())
                    <li><span><i class="fas fa-globe"></i>Website:</span><a href="#">{{ $listing->attributes->where('name', 'website')->first()->value ?? '' }}</a></li>
                    @endif
                  </ul>
                </div>
                <div class="widget-social-icon">
                  @if($listing->attributes->where('name', 'fb')->count())
                    <a href="{{ $listing->attributes->where('name', 'fb')->first()->value ?? '' }}"><i class="fab fa-facebook-f"></i></a>
                  @endif
                  @if($listing->attributes->where('name', 'twitter')->count())
                  <a href="{{ $listing->attributes->where('name', 'twitter')->first()->value ?? '' }}"><i class="fab fa-twitter"></i></a>
                  @endif
                  @if($listing->attributes->where('name', 'instagram')->count())
                  <a href="{{ $listing->attributes->where('name', 'instagram')->first()->value ?? '' }}"><i class="fab fa-instagram"></i></a>
                  @endif
                </div>
              </div>              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Listing Details End -->


@include('layouts.footer')