
    /* This will let you use the .remove() function later on */
    if (!('remove' in Element.prototype)) {
    Element.prototype.remove = function () {
        if (this.parentNode) {
            this.parentNode.removeChild(this);
        }
    };
}

    mapboxgl.accessToken = 'pk.eyJ1IjoibHVjZHV0IiwiYSI6ImNra2U5dHlhODBqNjgyb255MDh6dW53OTIifQ.ZiHur34w_RkVa7dk9zea5g';

    /**
    * Add the map to the page
    */
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [-0.50, 44.80],
    zoom: 8,
    scrollZoom: true
});

    console.log(json);
    var results = [];
    for (var i = 0; i < json.length; i++) {
        var entry = json[i];
        var feature = {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [entry.longitude, entry.latitude]
            },
            'properties': {
                'id': entry.id,
                'phone': entry.phone,
                'email': entry.email,
                'address': entry.address,
                'city': entry.city,
                'postalCode': entry.zip,
                'name': entry.name,
                'volunteers': entry.volunteers_max_score,
            }
        };
        results.push(feature);
    }

    var stores = {
        'type': 'FeatureCollection',
        'features': results
    };

    /**
    * Assign a unique id to each store. You'll use this `id`
    * later to associate each point on the map with a listing
    * in the sidebar.
    */
    stores.features.forEach(function (store, i) {
    store.properties.id = i;
});

    /**
    * Wait until the map loads to make changes to the map.
    */
    map.on('load', function (e) {
    /**
     * This is where your '.addLayer()' used to be, instead
     * add only the source without styling a layer
     */
    map.addSource('places', {
        'type': 'geojson',
        'data': stores
    });

    /**
     * Add all the things to the page:
     * - The location listings on the side of the page
     * - The markers onto the map
     */
    buildLocationList(stores);
    addMarkers();
});

    /**
    * Add a marker to the map for every store listing.
    **/
    function addMarkers() {
    /* For each feature in the GeoJSON object above: */
    stores.features.forEach(function (marker) {
        /* Create a div element for the marker. */
        var el = document.createElement('div');
        /* Assign a unique `id` to the marker. */
        el.id = 'marker-' + marker.properties.id;
        /* Assign the `marker` class to each marker for styling. */
        el.className = 'marker';

        /**
         * Create a marker using the div element
         * defined above and add it to the map.
         **/
        new mapboxgl.Marker(el, { offset: [0, -23] })
            .setLngLat(marker.geometry.coordinates)
            .addTo(map);

        /**
         * Listen to the element and when it is clicked, do three things:
         * 1. Fly to the point
         * 2. Close all other popups and display popup for clicked store
         * 3. Highlight listing in sidebar (and remove highlight for all other listings)
         **/
        el.addEventListener('click', function (e) {
            /* Fly to the point */
            flyToStore(marker);
            /* Close all other popups and display popup for clicked store */
            createPopUp(marker);
            /* Highlight listing in sidebar */
            var activeItem = document.getElementsByClassName('active');
            e.stopPropagation();
            if (activeItem[0]) {
                activeItem[0].classList.remove('active');
            }
            var listing = document.getElementById(
                'listing-' + marker.properties.id
            );
            listing.classList.add('active');
        });
    });
}

    /**
    * Add a listing for each store to the sidebar.
    **/
    function buildLocationList(data) {
    data.features.forEach(function (store, i) {
        /**
         * Create a shortcut for `store.properties`,
         * which will be used several times below.
         **/
        var prop = store.properties;

        /* Add a new listing section to the sidebar. */
        var listings = document.getElementById('listings');
        var listing = listings.appendChild(document.createElement('div'));
        /* Assign a unique `id` to the listing. */
        listing.id = 'listing-' + prop.id;
        /* Assign the `item` class to each listing for styling. */
        listing.className = 'item';

        /* Add the link to the individual listing created above. */
        var link = listing.appendChild(document.createElement('a'));
        link.href = '#';
        link.className = 'title';
        link.id = 'link-' + prop.id;
        link.innerHTML = prop.name;

        /* Add details to the individual listing. */
        var details = listing.appendChild(document.createElement('div'));
        details.innerHTML = prop.city;
        if (prop.phone) {
            details.innerHTML += ' &middot; ' + prop.phone;
        }

        /**
         * Listen to the element and when it is clicked, do four things:
         * 1. Update the `currentFeature` to the store associated with the clicked link
         * 2. Fly to the point
         * 3. Close all other popups and display popup for clicked store
         * 4. Highlight listing in sidebar (and remove highlight for all other listings)
         **/
        link.addEventListener('click', function (e) {
            for (var i = 0; i < data.features.length; i++) {
                if (this.id === 'link-' + data.features[i].properties.id) {
                    var clickedListing = data.features[i];
                    flyToStore(clickedListing);
                    createPopUp(clickedListing);
                }
            }
            var activeItem = document.getElementsByClassName('active');
            if (activeItem[0]) {
                activeItem[0].classList.remove('active');
            }
            this.parentNode.classList.add('active');
        });
    });
}

    /**
    * Use Mapbox GL JS's `flyTo` to move the camera smoothly
    * a given center point.
    **/
    function flyToStore(currentFeature) {
    map.flyTo({
        center: currentFeature.geometry.coordinates,
        zoom: 15
    });
}

    /**
    * Create a Mapbox GL JS `Popup`.
    **/
    function createPopUp(currentFeature) {
    var popUps = document.getElementsByClassName('mapboxgl-popup');
    if (popUps[0]) popUps[0].remove();
    var popup = new mapboxgl.Popup({ closeOnClick: true })
    .setLngLat(currentFeature.geometry.coordinates)
    .setHTML(
    '<h3>'+ currentFeature.properties.name +'</h3>' +
    '<h3>'+ currentFeature.properties.volunteers +' places restantes' + '</h3>' +
    '<h4>' + currentFeature.properties.address + '</h4>' +
    '<div id="inscrip">' + '<a id="inscrip" href="benevoles" class="p-2 lg:px-4 md:mx-2 orange text-center border border-solid border-yellow-600 rounded hover:bg-yellow-600 hover:text-white transition-colors duration-300 mt-1 md:mt-0 md:ml-1">' + 'S\'inscrire' + '</a>' + '</div>'
    )
    .addTo(map);
}

    let toggleBtn = document.querySelector("#navbar-toggle");
    let collapse = document.querySelector("#navbar-collapse");

    toggleBtn.onclick = () => {
        collapse.classList.toggle("hidden");
        collapse.classList.toggle("flex");
    };


    function displayNone() {
        if (currentFeature.properties.volunteers = 0){
            var myButton = document.getElementById('inscrip');
            myButton.style.display = 'none';
        }
    }
    // DEBUT D'UN FONCTION POUR NE PAS AFFICHER LE BOUTON S'INSCRIRE QUAND BENEVOLES =