document.getElementById('bookNowBtn').addEventListener('click', function() {
    alert('Your car booking request has been submitted!');
  });

  var images = ["https://i.insider.com/55020b626da81129188b4568", "https://parkers-images.bauersecure.com/gallery-image/pagefiles/252545/1752x1168/12vw_2765.jpg","https://media.drive.com.au/obj/tx_q:50,rs:auto:1200:674:1/driveau/upload/cms/uploads/eifawg9c5l7igi5lxctw"];
  var randomIndex = Math.floor(Math.random() * images.length);
  var randomImage = images[randomIndex];
  document.getElementById("randomImage").src = randomImage;

  