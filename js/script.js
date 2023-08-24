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

//form validation

const popup = document.getElementById('modal');
const form = document.getElementById("feedbackForm");
const formData = new FormData(form);

// from
form.addEventListener("submit", function(e) {
    e.preventDefault(); // Предотвращение отправки формы
  
    if (validateForm()) {
      submitForm();
    }
});

function submitForm() {
    console.log('done')
    fetch(form.action, {
        url: 'server.php',
        method: 'POST',
        body: formData
    })
    .then(function(response) {
        if (response.ok) {
          popup.style.display = "block";
          return response.json(); // Можно использовать response.text() или другие методы для получения тела ответа
        } else {
          // Ошибка при получении ответа
          throw new Error('Ошибка ' + response.status);
        }
    })
    .then(function(data) {
        // Обработка данных ответа от сервера
        console.log(data);
      })
      .catch(function(error) {
        // Обработка ошибки
        console.log(error);
    });

} 

function validateForm() {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let message = document.getElementById("message").value;
    let errorElement = document.getElementById("error");
  
    errorElement.classList.add("hidden");
  
    if (name === "") {
        errorElement.innerHTML = "Empty name field ";
        errorElement.classList.remove("hidden");
        return false;
    }

    if (email === "") {
        errorElement.innerHTML = "Wrong email format ";
        errorElement.classList.remove("hidden");
        return false;
    }

    if (message === "") {
        errorElement.innerHTML = "Empty message field";
        errorElement.classList.remove("hidden");
        return false;
    }
  
    return true;
  }









