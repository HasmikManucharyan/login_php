$(document).ready(function(){
  	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});

	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
	$('form').submit(function(e) {
        var $form = $(this);
        $.ajax({
          type: $form.attr('method'),
          url: $form.attr('action'),
          data: $form.serialize()
        }).done(function(data) {
          $('#container').html('<h3> Thank You '+data+'!!!</h3><button id="logout">Log Out</button>');
          $('#logout').click(function(){
    	  location.reload();
    })
        }).fail(function() {
          location.reload();
        });
        e.preventDefault(); 
    });    
});