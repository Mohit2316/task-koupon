        <style>
            /*import font awesome css icon library*/
            @import url("http://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.css");
            
            input, select, textarea {
                background: none repeat scroll 0 0 #fafafa;
                border: 1px solid #eeeeee;
                color: #5e5e5e;
                display: block;
                font-family: arial, sans-serif;
                font-size: inherit;
                padding: 10px;
                width: 100%;
                box-sizing: border-box;
                font-size: 16px;
                margin: 0;
                height: 40px;
            }
            
            #searchtext {
                overflow: hidden;
            }
            
            a.search-submit-button {
                background: none repeat scroll 0 0 #fafafa;
                border-bottom: 1px solid #eeeeee;
                border-right: 1px solid #eeeeee;
                border-top: 1px solid #eeeeee;
                color: #5e5e5e !important;
                display: block;
                float: left;
                font-family: inherit;
                font-size: 20px;
                padding: 8px 10px;
                text-align: center;
                width: 45px;
                box-sizing: border-box;
                height: 40px;
            }
            
            #form-container {
                /* width: 60%; */
            }
            
            
            
        </style> 

 <!-- SEARCH AREA -->
        <div class="search-area-custom">
		    <div class="container">
                <div class="row">
				<div class="col-md-8-cust">
					<div id="form-container">
						<a class="search-submit-button" href="javascript:void(0)">
							<i class="fa fa-search"></i>
						</a>
						<div id="searchtext">
							<input type="text" id="s" name="s" value="Search Something...">
						</div>
					</div>
				</div>
                    <div class="col-md-3-cust">
					<div id="form-container">
						<a class="search-submit-button" href="javascript:void(0)">
							<i class="fa fa-search"></i>
						</a>
						<div id="searchtext">
							<input type="text" id="s" name="s" value="Search Something...">
						</div>
					</div>
					
                    </div>	
                    <div class="col-md-1">
                        <button class="btn btn-block btn-white search-btn" type="submit">Search</button>
                    </div>					
				</div>
			</div>
        </div>
        <!-- END SEARCH AREA -->
