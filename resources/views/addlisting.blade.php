@include('layouts.header')


    <div class="grey-bg-2 padding-bottom-90">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="dashboard-section dashboard-add-listing">

              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif

              <div class="dashboard-section-body">
              <form action="" method="POST" class="post-listing" enctype="multipart/form-data">
                @csrf


                
                  <div class="form-field basic-field">
                    <h4>Basic Informations</h4>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label>Listing Title *</label>
                          <input type="text" value="{{ $listing->title ?? ''}}" name="title" class="form-control" placeholder="Ex: Golden Restuarant">
                        </div>
                        <div class="form-group">
                          <label>Category *</label>
                          <select class="form-control select-category" name="category_id" id="select-category">
                            @foreach($categories as $category)
                            <option value="{{ $category->id }}" @isset($listing)@if($listing->category_id == $category->id)selected @endif @endisset>{{ $category->name }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Phone No *</label>
                          <input type="text" name="phone" class="form-control" placeholder="+9607907173" value="{{ $listing->phone ?? ''}}">
                        </div>
                        <div class="form-group">
                          <label>Website</label>
                          <input type="text" name="website" class="form-control" placeholder="http://" value="@isset($listing){{ collect($listing->social)->firstWhere('key', 'website')["value"] ?? ''}}@endisset">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="cp-map listing-mark" id="location" data-lat="4.1755" data-lng="73.5093" data-zoom="16"></div>
                        <div class="form-group">
                          <label>Address</label>
                          <div class="row">
                            <input type="text" class="form-control" name="address" placeholder="Full Address" value="{{ $listing->address ?? ''}}">
                          </div>
                          <label>Map Coordinates</label>
                          <div class="d-flex justify-content-center align-items-center">
                            <div class="flex-fill">
                              <input type="text" class="form-control" id="latitudeBinder" name="latitude" placeholder="Latitude" value="{{ $listing->latitude ?? '4.1755'}}">
                            </div>
                            <div class="flex-fill">
                              <input type="text" class="form-control" id="longitudeBinder" name="longitude" placeholder="Longitude" value="{{ $listing->longitude ?? '73.5093'}}">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <span class="label-cover">Company Logo * (200x200)</span>
                          <label class="upload-file">
                            <input type="file" name="avatar">
                            <i class="far fa-image"></i>
                            <span>Click here or drop file to upload</span>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                          <span class="label-cover">Cover Photo * (550x297)</span>
                          <label class="upload-file">
                            <input type="file" name="cover_pic">
                            <i class="far fa-image"></i>
                            <span>Click here or drop file to upload</span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                    <div class="social-networks">
                      <h5>Social Networks</h5>
                      <div class="social-network-block">

                          @if(!empty($listing))
                            @foreach($listing->social as $social)
                            @if($social["key"] !== "website")
                            <div class="form-group">
                            <select class="form-control add-social-link" name="social_key[]">
                            <option value="{{ $social["key"] }}">{{ $social["key"] }}</option>
                            </select>
                            <input type="text" placeholder="Enter Link" value="{{ $social["value"] }}" name="social_value[]" class="form-control social-link-input">
                            <div class="delete">
                              <i class="far fa-trash-alt"></i>
                            </div>
                            </div>
                            @endif
                            @endforeach
                          @else
                          <div class="form-group">
                          <select class="form-control add-social-link" name="social_key[]">
                            <option value="">Select Network</option>
                            <option value="fb">Facebook</option>
                            <option value="twitter">Twitter</option>
                            <option value="instagram">Instagram</option>
                          </select>
                          <input type="text" placeholder="Enter Link" name="social_value[]" class="form-control social-link-input">
                          <div class="delete">
                            <i class="far fa-trash-alt"></i>
                          </div>
                          </div>
                          @endif
                        
                      </div>
                      <a href="#" class="button add-field-button">Add</a>
                    </div>
                    </div>
                    </div>
                  </div>

                
                  <div class="button-area">
                    <button class="button">Save</button>
                  </div>

                @isset($listing)
                    <input type="hidden" name="listing_id" value="{{ $listing->id }}">
                    <a href="{{ route('delete', ['id' => $listing->id]) }}" class="button">Delete</a>
                @endisset
                  

                </form>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

@include('layouts.footer')