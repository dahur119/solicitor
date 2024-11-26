<!DOCTYPE html>
<html lang="zxx">
<head>
    @include('components.head')
</head>
<body>
    <div id="wrapper">
        <div id="topbar" class="text-white bg-color"></div>

        <!-- header begin -->
        @include('components.dashboardHead')
        <!-- header close -->

        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>

            <section aria-label="section" class="text-light" data-bgcolor="#111111">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2 mb-sm-30 text-center">
                            <h3>Edit News</h3>

                            <!-- Form to Edit News -->
                            <form name="editForm" id="edit_form" class="form-border" method="POST" action="{{ route('news.update', $news->slug) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT') <!-- Indicate that this is an UPDATE request -->

                                <!-- Title -->
                                <div class="field-set">
                                    <input type="text" name="title" id="title" class="form-control" placeholder="News Title" value="{{ old('title', $news->title) }}" required />
                                </div>

                                <!-- Slug -->
                                <div class="field-set">
                                    <input type="text" name="slug" id="slug" class="form-control" placeholder="Slug (unique)" value="{{ old('slug', $news->slug) }}" required />
                                </div>

                                <!-- Author -->
                                <div class="field-set">
                                    <input type="text" name="author" id="author" class="form-control" placeholder="Author Name" value="{{ old('author', $news->author) }}" required />
                                </div>

                                <!-- Tagline -->
                                <div class="field-set">
                                    <input type="text" name="tagline" id="tagline" class="form-control" placeholder="Tagline" value="{{ old('tagline', $news->tagline) }}" required />
                                </div>

                                <!-- Message/Content -->
                                <div class="field-set">
                                    <textarea name="message" id="message" class="form-control" placeholder="Your Message">{{ old('message', $news->message) }}</textarea>
                                </div>

                                <!-- Image -->
                                <div class="field-set">
                                    <input type="file" name="image" id="image" class="form-control" />

                                    <!-- Display Current Image (if any) -->
                                    @if ($news->image)
                                        <img src="{{ asset('images/news/' . $news->image) }}" alt="Current Image" width="100" />
                                    @endif
                                </div>

                                <div class="spacer-half"></div>

                                <!-- Submit Button -->
                                <div id="submit">
                                    <input type="submit" id="send_message" value="Update News" class="btn btn-custom" />
                                </div>

                                <div id="mail_success" class="success">Your news has been updated successfully.</div>
                                <div id="mail_fail" class="error">Sorry, error occurred while updating your news.</div>
                            </form>
                            <div class="spacer-single"></div>

                            <div >
                           
                                <form action="{{ route('news.destroy', ['id' => $news->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this news item?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                         
                        </div>
                        </div>

                       
                    </div>
                </div>
            </section>
        </div>
        <!-- content close -->

        <footer>
            <div class="container">
                @include('components.footer')
            </div>
            <div class="subfooter">
                @include('components.sub-footer')
            </div>
        </footer>
        <!-- footer close -->
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('js/easing.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>

    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/enquire.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('js/jquery.plugin.js') }}"></script>
    <script src="{{ asset('js/typed.js') }}"></script>
    <script src="{{ asset('js/jarallax.js') }}"></script>
    <script src="{{ asset('js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('js/designesia.js') }}"></script>
</body>
</html>
