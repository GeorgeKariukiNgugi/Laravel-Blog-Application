$('#edit').on('show.bs.modal', function (event) {
    console.log('The edit button has been clicked.')
    var button = $(event.relatedTarget) // Button that triggered the modal
    var title = button.data('title') 
    var content = button.data('content');
    var id = button.data('id')
    var modal = $(this)
    modal.find('.modal-title').text('New message to ' + title)
    modal.find('.modal-body #hidden').val(id)
    modal.find('.modal-body #title').val(title)
    modal.find('.modal-body #content').val(content)
  })


  // When the button delete is clicked.
  $('#delete').on('show.bs.modal', function (event) {
    console.log('The delete button has been clicked.')
    var button = $(event.relatedTarget) // Button that triggered the modal
    var title = button.data('title') 
    var id = button.data('id')
    var modal = $(this)
    
    modal.find('.modal-body #hidden').val(id)
    modal.find('.modal-body #title').text(title)
    
  })