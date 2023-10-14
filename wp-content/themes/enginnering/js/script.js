// google map

let map;
let imageMarker = '/wp-content/themes/enginnering/img/pin.svg';
let grayStyles = [
    {
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "saturation": 36
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 70
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#000000"
            },
            {
                "lightness": 16
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 17
            },
            {
                "weight": 1.2
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 25
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 25
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 35
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 35
            },
            {
                "weight": 0.2
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 35
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 35
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 35
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#000000"
            },
            {
                "lightness": 13
            }
        ]
    }
];

async function initMap() {
  const { Map } = await google.maps.importLibrary("maps");

  map = new Map(document.getElementById("map"), {
    center: { lat: 25.19751, lng: 55.27487 },
    zoom: 15,
    styles: grayStyles,
    disableDefaultUI: true
  }),

  marker = new google.maps.Marker ({
    position: { lat: 25.19751, lng: 55.27487 },
    map: map,
    icon: imageMarker
  });
}

initMap();

//form and modal

const popup = document.getElementById('modal');
const overlay = document.getElementById('overlay');
const closeBtn = document.getElementById('close-btn');
const wpcf7Elm = document.querySelector( '.wpcf7-form' );
const errorBlock = document.querySelector('.error_block');
const errorElementName = document.getElementById("errorName");
const errorElementMail = document.getElementById("errorMail");
const errorElementMessage = document.getElementById("errorMessage");

wpcf7Elm.addEventListener( 'wpcf7submit', function() {
        validateForm();
});

wpcf7Elm.addEventListener( 'wpcf7mailsent', function() {
        openModal();
        errorBlock.classList.toggle('open');
        wpcf7Elm.reset();
});

function openModal() {
    document.body.style.overflow = "hidden";
    popup.style.display = "block";
    overlay.style.display = "block";
}

function closeModal() {
    document.body.style.overflow = "";
    popup.style.display = "none";
    overlay.style.display = "none";
}

function closeByEscape(e)  {
    if(e.key === 'Esc') {
        closeModal();
    }
}

overlay.onclick = function(e) {
    let target = e.target;
    if (target.tagName === 'modal') return;
    closeModal();
};

closeBtn.addEventListener('click', (e) => {
    e.preventDefault();
    closeModal();
});



function validateForm() {

    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const message = document.getElementById("message").value;
    let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    let isOk = true;
    
    if (name === "") {
        errorElementName.innerHTML = "Empty name field &#xb7 ";
        isOk = false;
    } else {
        errorElementName.innerHTML = "";
    }
    if (email === "") {
        errorElementMail.innerHTML = " Wrong email format &#xb7 ";
        isOk = false;
    } else {
        errorElementMail.innerHTML = "";
    } 
    if (email.match(pattern)) {
        errorElementMail.innerHTML = "";
    } else {
        errorElementMail.innerHTML = " Wrong email format &#xb7 ";
    }
    if (message === "") {
        errorElementMessage.innerHTML = " Empty message field";
        isOk = false;
    } else {
        errorElementMessage.innerHTML = "";   
    }
    return isOk;
  }

//mobile menu

const menuButtonBig = document.getElementById('openMenu');
const menuButtonMin = document.getElementById('openMenu2');
const menuOpenBig = document.getElementById('mobile_menu');
const menuOpenBig2 = document.getElementById('mobile_menu2');
const overlayMenu = document.getElementById('overlay_menu');
const btnCOntact = document.querySelector('#button_contact-us-mobile');
const btnCOntact2 = document.querySelector('#button_contact-us-mobile2');

menuButtonBig.onclick = function() {
    menuOpenBig.classList.toggle('open');
    document.body.classList.toggle('open');
    overlayMenu.classList.toggle('open');
};

menuButtonMin.onclick = function() {
    menuButtonMin.classList.toggle('open');
    menuOpenBig2.classList.toggle('open');
    document.body.classList.toggle('open');
    overlayMenu.classList.toggle('open');
};

overlayMenu.onclick = function(e) {
    menuButtonMin.classList.remove('open');
    menuOpenBig.classList.remove('open');
    menuOpenBig2.classList.remove('open');
    document.body.classList.remove('open');
    overlayMenu.classList.remove('open');
};

btnCOntact.onclick = function() {
    menuButtonMin.classList.remove('open');
    menuOpenBig.classList.remove('open');
    menuOpenBig2.classList.remove('open');
    document.body.classList.remove('open');
    overlayMenu.classList.remove('open');
};

btnCOntact2.onclick = function() {
    menuButtonMin.classList.remove('open');
    menuOpenBig.classList.remove('open');
    menuOpenBig2.classList.remove('open');
    document.body.classList.remove('open');
    overlayMenu.classList.remove('open');
};












