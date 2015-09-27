 <div id="fb-root"></div>
    <script>
	$(document).ready(function(){
	FB.Event.subscribe('auth.login', login_event);
	FB.Event.subscribe('auth.logout', logout_event);
	});
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '318664324940433',
          status     : true,
          xfbml      : true
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/all.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
var login_event = function(response) {
  console.log("login_event");
  console.log(response.status);
  console.log(response);
  }
var logout_event = function(response) {
  console.log("logout_event");
  console.log(response.status);
  console.log(response);
}

    </script>
	<div class="fb-like" data-send="true" data-width="450" data-show-faces="true"></div>
	// In your HTML:
<input type="button" value="Login" onclick="FB.login();">
<input type="button" value="Logout" onclick="FB.logout();">

// In your onload method:

// In your JavaScript code:

