$(document).ready(function() {

  // *UTILITY
  $('.select2').select2();

  $('.datatable').DataTable();

  var quill = new Quill('.editor', {
    theme: 'snow'
  });
});