        <!-- SEARCH AREA -->
        <form class="search-area form-group">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 clearfix search-text" id="search-text">
                        <label><i class="fa fa-search"></i><!-- <span>I am searching for</span> -->
                        </label>
                        <div class="search-area-division search-area-division-input">
                            <input class="form-control" type="text" placeholder="Search For.."/>
                        </div>
                        <button class="btn search-btn-mobile" type="submit">SEARCH</button>
                    </div>
                    <div class="col-md-3 clearfix search-location" id="search-location">
                        <label>
							<a class="popup-text" href="#location-dialog" data-effect="mfp-move-from-top">
								<i class="fa fa-map-marker" id="map-icon"></i>
								<!-- <span>In</span> -->
							</a>
                        </label>
                        <div class="search-area-division search-area-division-location">
                            <input class="form-control" type="text" placeholder="<?php echo $_COOKIE["Kouponize"];?>" />
                        </div>
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-block btn-white search-btn" type="submit">Search</button>
                    </div>
                </div>
            </div>
        </form>
        <!-- END SEARCH AREA -->
