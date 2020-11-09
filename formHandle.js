/* attach a submit handler to the form */
$("#form").submit(function(event) {

  /* stop form from submitting normally */
  event.preventDefault();

  /* get the action attribute from the <form action=""> element */
  var $form = $(this),
    url = $form.attr('action');

  /* Send the data using post with element id name and name2*/
  var posting = $.post(url) {
    ToDo: $('#To_DO').val(),
    Description: $('#Description').val()
    Deadline: $('#Deadline').val()
  });

  /* Alerts the results */
  posting.done(function(data) {
    $('#result').text('success');
  });
  posting.fail(function() {
    $('#result').text('failed');
  });
});