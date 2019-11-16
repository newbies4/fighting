function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#frontPreview').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]);
  }
}
/*function readURL2(input) {
  if (input.files && input.files[1]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#backPreview').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[1]);
  }
}
function readURL3(input) {
  if (input.files && input.files[2]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#interiorPreview').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[2]);
  }
}*/

$("#front").change(function() {
  readURL(this);
});
/*$("#back").change(function() {
  readURL2(this);
});
$("#interior").change(function() {
  readURL3(this);
});*/