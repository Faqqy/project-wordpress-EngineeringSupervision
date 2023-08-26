// google map

let map;
let imageMarker = '../img/pin.svg';
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
                "lightness": 40
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
                "lightness": 20
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
                "lightness": 21
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
                "lightness": 17
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
                "lightness": 29
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
                "lightness": 18
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
                "lightness": 16
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
                "lightness": 19
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
                "lightness": 17
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
const form = document.getElementById("feedbackForm");
const formData = new FormData(form);
const closeBtn = document.getElementById('close-btn');

form.addEventListener("submit", function(e) {
    e.preventDefault();
  
    if (validateForm()) {
      submitForm();
      openModal();
      form.reset();
    }
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
})


function submitForm() {
    console.log('done')
    fetch(form.action, {
        url: 'http://gupmm.ru/server.php',
        method: 'POST',
        body: formData
    })
    .then(function(response) {
        if (response.ok) {
          return response.json();
        } else {
          throw new Error('Ошибка ' + response.status);
        }
    })
    .then(function(data) {
        console.log(data);
      })
    .catch(function(error) {
        console.error(error);
    });

} 

function validateForm() {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let message = document.getElementById("message").value;
    let errorElement = document.getElementById("error");
    const inputSelectorName = document.querySelector('input[name="name"]');
    const inputSelectorEmail = document.querySelector('input[name="email"]');
    const inputSelectorText = document.querySelector('textarea');
  
    errorElement.classList.add("hidden");
  
    if (name === "") {
        inputSelectorName.classList.add('req');
        errorElement.innerHTML = "Empty name field ";
        errorElement.classList.remove("hidden");
        return false;
    }

    if (email === "") {
        inputSelectorEmail.classList.add('req');
        errorElement.innerHTML = "Wrong email format ";
        errorElement.classList.remove("hidden");
        return false;
    }

    if (message === "") {
        inputSelectorText.classList.add('req');
        errorElement.innerHTML = "Empty message field";
        errorElement.classList.remove("hidden");
        return false;
    }
  
    return true;
  }


//mobile menu

const menuButtonBig = document.getElementById('openMenu');
const menuButtonMin = document.getElementById('openMenu2');
const menuOpenBig = document.getElementById('mobile_menu');
const menuOpenBig2 = document.getElementById('mobile_menu2');
const overlayMenu = document.getElementById('overlay_menu');

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











