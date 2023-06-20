document.addEventListener("DOMContentLoaded", function() {
  var sections = document.querySelectorAll('.fade-in');

  function checkFadeIn() {
    sections.forEach(function(section) {
      var position = section.getBoundingClientRect();

      if (position.top < window.innerHeight * 0.9) {
        section.classList.add('visible');
      } else {
        section.classList.remove('visible');
      }
    });
  }

  checkFadeIn();
  window.addEventListener('scroll', checkFadeIn);
});
function submitForm(event) {
  event.preventDefault();

  var form = event.target.form;

  var name = form.name.value;
  var email = form.email.value;
  var phone = form.phone.value;
  var message = form.message.value;

  if (name === "" || email === "" || phone === "" || message === "") {
    alert("Please fill out all fields before submitting the form.");
  } else {
    var formData = new FormData(form);

    $.ajax({
      url: "proses.php",
      type: "POST",
      data: formData,
      processData: false,
      contentType: false,
      success: function(result) {
        // Mendapatkan order id dari hasil pengiriman
        var orderId = result.trim();

        // Menampilkan pesan hasil pengiriman dengan order id
        var resultHTML = "<h2>Your Form is Submitted.</h2>" +
          "<p>Hi " + name + "!</p>" +
          "<p>Your order id is " + orderId + "</p>" +
          "<p>We will contact you directly via WhatsApp with your phone number " + phone + " in a few minutes.</p>";

        // Menempatkan pesan hasil pengiriman di sebelah elemen dengan id "resultForm"
        var resultForm = document.getElementById("resultForm");
        resultForm.innerHTML = resultHTML;

        // Memperbarui tampilan dengan data pesanan terbaru
        $("#latestOrders").html(result);

        // Mengosongkan form setelah pengiriman berhasil
        form.reset();
      },
      error: function(error) {
        console.log(error);
      }
    });
  }
}


function updateLatestOrders() {
  console.log("Updating latest orders...");
  $.ajax({
    url: "get_latest_orders.php",
    type: "GET",
    success: function(result) {
      // Memperbarui tampilan dengan data pesanan terbaru
      $(".latestOrders").html(result);
    },
    error: function(error) {
      console.log(error);
    }
  });
}

// Memperbarui data pesanan setiap 5 detik
setInterval(updateLatestOrders, 5000);

function redirectToGoogleMaps() {
  window.location.href = "https://goo.gl/maps/5EWJM5JLqx2Q6dgT8";
}
function scrollToSection(sectionId) {
  const section = document.getElementById(sectionId);
  section.scrollIntoView({ behavior: 'smooth' });
}

