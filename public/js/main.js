(function($) {

	"use strict";

// Initiate the wowjs
new WOW().init();


// Sticky Navbar
$(window).scroll(function () {
	if ($(this).scrollTop() > 45) {
		$('.navbar').addClass('sticky-top shadow-sm');
	} else {
		$('.navbar').removeClass('sticky-top shadow-sm');
	}
});


// Back to top button
$(window).scroll(function () {
	if ($(this).scrollTop() > 100) {
		$('.back-to-top').fadeIn('slow');
	} else {
		$('.back-to-top').fadeOut('slow');
	}
});
$('.back-to-top').click(function () {
	$('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
	return false;
});
  // Form
	var contactForm = function() {
		if ($('#contactForm').length > 0 ) {
			$( "#contactForm" ).validate( {
				rules: {
					name: "required",
					subject: "required",
					email: {
						required: true,
						email: true
					},
					message: {
						required: true,
						minlength: 5
					}
				},
				messages: {
					name: "Please enter your name",
					subject: "Please enter your subject",
					email: "Please enter a valid email address",
					message: "Please enter a message"
				},
				/* submit via ajax */

				submitHandler: function(form) {
					var $submit = $('.submitting'),
						waitText = 'Submitting...';

					$.ajax({
				      type: "POST",
				      url: "php/sendEmail.php",
				      data: $(form).serialize(),

				      beforeSend: function() {
				      	$submit.css('display', 'block').text(waitText);
				      },
				      success: function(msg) {
		               if (msg == 'OK') {
		               	$('#form-message-warning').hide();
				            setTimeout(function(){
		               		$('#contactForm').fadeIn();
		               	}, 1000);
				            setTimeout(function(){
				               $('#form-message-success').fadeIn();
		               	}, 1400);

		               	setTimeout(function(){
				               $('#form-message-success').fadeOut();
		               	}, 8000);

		               	setTimeout(function(){
				               $submit.css('display', 'none').text(waitText);
		               	}, 1400);

		               	setTimeout(function(){
		               		$( '#contactForm' ).each(function(){
											    this.reset();
											});
		               	}, 1400);

			            } else {
			               $('#form-message-warning').html(msg);
				            $('#form-message-warning').fadeIn();
				            $submit.css('display', 'none');
			            }
				      },
				      error: function() {
				      	$('#form-message-warning').html("Something went wrong. Please try again.");
				         $('#form-message-warning').fadeIn();
				         $submit.css('display', 'none');
				      }
			      });
		  		} // end submitHandler

			});
		}
	};
	contactForm();

	//l'url prévu pour l'adhesion
	let url = "/user/adhesion";
	let token = document
		.querySelector('meta[name="csrf-token"]')
		.getAttribute("content");


    // Début de la gestion de l'adhesion
	var adhesionUser = function(e) {
		if(
			$('#nameForm').val().length > 0
			&& $('#emailForm').val().length > 0
			&& $('#numForm').val().length > 0
			&& $('#competenceForm').val().length > 0
			&& $('#motivationForm').val().length > 0
		) {
			$('#champs_requis').css("display", "none");
			var options = {
				headers: {
					"Content-Type": "application/json",
					Accept: "application/json, text-plain, */*",
					"X-Requested-With": "XMLHttpRequest",
					"X-CSRF-TOKEN": token,
				},
				method: 'POST',
				credentials: "same-origin",
				body: JSON.stringify({
					nom_prenom: $('#nameForm').val(),
					email: $('#emailForm').val(),
					numeroTel: $('#numForm').val(),
					competences: $('#competenceForm').val(),
					motivations: $('#motivationForm').val(),
				}),
			};
			fetch(url, options)
				.then((resp) => resp.json())
				.then((resp) => {
                    if(resp.success == true) {
                        $('#champs_requis').css("display", "none");
                        $('#add_success').css("display", "block");
                        $('#add_error').css("display", "none");
                        $('#add_error1').css("display", "none");
						$('#nameForm').val("");
						$('#emailForm').val("");
						$('#numForm').val("");
						$('#competenceForm').val("");
						$('#motivationForm').val("");
                    } else {
                        $('#champs_requis').css("display", "none");
                        $('#add_success').css("display", "none");
                        $('#add_error').css("display", "block");
                        $('#add_error1').css("display", "none");
                    }
				})
				.catch((err) => {
					console.log(err);
				});
		}else {
            $('#champs_requis').css("display", "block");
            $('#add_error1').css("display", "block");
            $('#add_success').css("display", "none");
            $('#add_error').css("display", "none");
        }
		e.preventDefault();
	};
	$('.AdhesionUser').submit(adhesionUser);

	var annuleradhesion = function() {
        $('#champs_requis').css("display", "none");
        $('#add_success').css("display", "none");
        $('#add_error').css("display", "none");
        $('#add_error1').css("display", "none");
        $('#nameForm').val("");
        $('#emailForm').val("");
        $('#numForm').val("");
        $('#competenceForm').val("");
        $('#motivationForm').val("");
	};
	$('#AnnulerAdhesion').click(annuleradhesion);
    $('#AnnulerAdhesion1').click(annuleradhesion);
//Fin de la gestion de l'adhesion

//---------Gestion de la Newsletter----------------
let url1 = "/newsletter/member/add";
let token1 = document
    .querySelector('meta[name="csrf-token"]')
    .getAttribute("content");

var newsletter = function () {
    if ($("#newsletterForm").val().length > 0) {
        if (
            /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(
                $("#newsletterForm").val()
            )
        ) {
            var options = {
                headers: {
                    "Content-Type": "application/json",
                    Accept: "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": token1,
                },
                method: "post",
                credentials: "same-origin",
                body: JSON.stringify({
                    email: $("#newsletterForm").val(),
                }),
            };

            fetch(url1, options)
                .then((response) => response.json())
                .then((response) => {
                    if (response.success) {
                        $(".text-danger.error").css("display", "none");
                        $(".text-success.error").fadeIn(2000);
                        $("#newsletterForm").val("");
                    } else {
                        $(".text-success.error").css("display", "none");
                        $(".text-danger.error")
                            .fadeIn()
                            .text(
                                "Une erreur s'est produite ! Rechargez la page."
                            );
                    }
                })
                .catch(() => {
                    $(".text-success.error").css("display", "none");
                    $(".text-danger.error")
                        .fadeIn(2000)
                        .text(
                            "Une erreur s'est produite ! Rechargez la page."
                        );
                });
        } else {
            $(".text-success.error").css("display", "none");
            $(".text-danger.error").fadeIn(2000).text("Adresse invalide !");
        }
    } else {
        $(".text-success.error").css("display", "none");
        $(".text-danger.error")
            .fadeIn(2000)
            .text("Veuillez remplir le champ d'email.");
    }
};
$("#newsletterSubmit").click(newsletter);
//----Fin de la Gestion de la Newsletter-----

})(jQuery);