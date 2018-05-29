<!--  Email Subscription Section  -->
	<section class="sub_box">
		<h1 style="color: whitesmoke;">@lang('body.donde')</h1>
			<div id="map"></div>
		<script>
		function initMap() {
			var hostal = {lat: -53.1634291, lng: -70.912326};
			var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 16,
			center: hostal
			});
			var marker = new google.maps.Marker({
			position: hostal,
			map: map
			});
		}
		</script>
	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGZPQjZj0XxTnSNlwbGvkwAVZHiNubjFY&callback=initMap">
    </script>

	</section>